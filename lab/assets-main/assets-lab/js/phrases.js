var phrases = [

"Ä WELCOME TO LAB / co ®,",
"please use the [prev] and [next] key",
"to continue the path",
"⩰ visions ⩰",
"canvãs",
"sÙperhi & c⧁drops⨦",
"∡ Julien Kersaudy - Web TM 2020 ©",
]

$("input").on("input", function (){
	var value = $(this).val()

	var phrase = phrases[value]

	$("div.phrase").html(phrase)
})