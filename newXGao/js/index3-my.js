	$(document).ready(function() {
				//  		 $("#yh_xx").hide();
				//        var json = JSON.parse(localStorage.getItem("userInfo"));

				var json = JSON.parse(sessionStorage.getItem("userInfo"));


				$("#dl_div").show();
				$("#yh_xx").hide();
				//  			  }

				if(json != null) {

					//   $("#mf").text("注销");
					$("#dl_div").hide();
					$("#yh_xx").show();

					$("#dl").text(json.name);
					$("#nihao").text("欢迎回来    " + json.name);

				}
				$("#zx").click(function() {
					//			 localStorage.removeItem("userInfo");
					sessionStorage.removeItem("userInfo");

					window.location.reload();
				});

				//  		alert(json.name);
				//        console.log(json.name);

			});