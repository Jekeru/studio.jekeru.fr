function SlideShow ($viewer) {
	this.viewer = $viewer;
	this.container = $viewer.find('.infinite-slideshow-images');
	this._container = this.container[0];
	this.images = this.container.find('img');
	this.viewer_width = $viewer.width();
	this.scroll = true;
	
	// watch images for load event
	this.beginLoadImages();
}

SlideShow.prototype.beginLoadImages = function () {
	var _this = this,
		images = this.images,
		len = images.length,
		loaded = 0,
		cb = this.padContainer.bind(this);
	
	this.first_image = images[0];
	
	// wait for images to load...
	images.each(function () {
		if (this.complete && this.naturalHeight !== 0) {
			// image was cached
			onLoad.call(this);
		} else {
			// wait for image to load
			$(this).on('load', onLoad);
		}
	});
	
	function onLoad () {
		// save width to prevent the need to wait for load again
		this.setAttribute('width', this.width);
		if (++loaded === len) cb();
	}
};

SlideShow.prototype.padContainer = function () {
	var $container = this.container,
		imgs = this.images;
	
	// no dragging images
	imgs.attr('draggable', false);

	// full image width 
	this.full_width = imgs.toArray().reduce(function (a,b) {
		return a + b.width;
	},0);
	
	// prepend the end
	$container.prepend(imgs.clone());
	// append the beginning
	$container.append(imgs.clone());
	
	while ($container.width() < this.viewer_width * 1.5) {
		// ballparking this one
		$container.prepend(imgs.clone());
		$container.append(imgs.clone());
	}
	this.addEvents();
	this.begin();
};

SlideShow.prototype.addEvents = function () {
	var ismousedown,
		startLeft,
		containerLeft,
		viewer = this.viewer[0],
		container = this._container;
	
	// start/stop scroll on mouseover/out
	this.viewer.on('mouseover', function () {
		this.scroll = false;
	}.bind(this)).on('mouseout', function () {
		this.scroll = true;
		this.loop();
	}.bind(this)).on('mousemove touchmove', function (e) {
		// move manually
		if (!ismousedown) return;
		e.preventDefault();
		var obj = e.touches && e.touches[0] || e,
			x = (obj.pageX - startLeft) * 2;
		container.style.left = containerLeft + x + 'px';
	}.bind(this)).on('mousedown touchstart', function (e) {
		ismousedown = true;
		containerLeft = container.offsetLeft;
		if (e.touches) {
			startLeft = e.touches[0].pageX;
		} else {
			startLeft = e.pageX;	
		}
	}.bind(this));
		
	$(document).on('mouseleave mouseup touchend', function (e) {
		ismousedown = false;
	}.bind(this));
	
	$(window).on('resize', function () {
		// pause and restart
		this.scroll = false;
		window.setTimeout(function () {
			this.scroll = true;
			this.loop();
		}.bind(this), 500);
	}.bind(this));
};

SlideShow.prototype.begin = function () {
	// start on original "first" image
	var start_left = this.first_image.offsetLeft;

	// center on page
	start_left -= this.viewer_width / 2;
	// center of image 
	start_left += this.first_image.width / 2;
	// reverse direction
	start_left *= -1;
	
	// extent of scrolling
	this.endpx = start_left - this.full_width;
	
	// start position
	this._container.style.left = start_left + 'px';
	
	// start scrolling
	this.loop();
};

SlideShow.prototype.loop = function () {
	var time,
		container = this._container,
		currentpx = this._container.offsetLeft,
		endpx = this.endpx,
		startAgain = this.begin.bind(this),
		_this = this;
	
	_loop();
		
	function _loop () {
		var now = new Date(),
			dt = now - (time || now),
			px_per_sec = 135,
			px = -(dt / 1000) * px_per_sec;
		
		// stop the press
		if (!_this.scroll) return;
		
		currentpx += px;
		
		if (currentpx > endpx) {
			container.style.left = (currentpx^0) + 'px';
			time = now;
			requestAnimationFrame(_loop);
		} else {
			requestAnimationFrame(startAgain);
		}
	}
};

$(function() {
	$('.infinite-slideshow').each(function() {
		new SlideShow($(this));
	});
});