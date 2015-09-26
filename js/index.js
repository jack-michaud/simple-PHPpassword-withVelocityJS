var $percent = $("#percent");

$percent.html("0%")

$("#percent").velocity(
{
	opacity: [0,4]
},
{
	duration: 2000,
	
	progress: function(elements,complete,remaining){
		$percent.html(Math.round(complete*100) + "%");
	},
	complete: function(){
		$("#content").velocity('transition.slideUpIn');
	}
}
)
