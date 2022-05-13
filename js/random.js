$( document ).ready(function() {
    
    $.ajax({
        // url: 'https://reqres.in/api/users?page=2',
        // dataType: 'json',
        // success: function(list) {
        //   console.log(list)
        url: 'https://randomuser.me/api/',
        dataType: 'json',
        success: function(data) {
          console.log(data.results[0].login.username);
          var username1 = data.results[0].login.username;
          $(".my-day-username1").text(username1);  
        }
      //   },
      //   
      //   }
      // });
    //   $(".my-day-username").click(()=> {
    //     alert("hello")
    // })
 
   
    
    
            
}

);
  let randomPic = Math.floor(Math.random() * 1000);
  $(".avatar1").attr("src", "https://avatars.dicebear.com/api/avataaars/" + randomPic + ".svg");
  $(".avatar2").attr("src", "https://avatars.dicebear.com/api/gridy/" + randomPic + "1.svg");
  $(".avatar3").attr("src", "https://avatars.dicebear.com/api/avataaars/" + randomPic + "2.svg");
  $(".avatar4").attr("src", "https://avatars.dicebear.com/api/jdenticon/" + randomPic + "3.svg");
  $(".avatar5").attr("src", "https://avatars.dicebear.com/api/micah/" + randomPic + "4.svg");
  $(".avatar6").attr("src", "https://avatars.dicebear.com/api/micah/" + randomPic + "5.svg");
  $(".avatar7").attr("src", "https://avatars.dicebear.com/api/micah/" + randomPic + "6.svg");
  $(".avatar8").attr("src", "https://avatars.dicebear.com/api/micah/" + randomPic + "7.svg");
  $(".avatar9").attr("src", "https://avatars.dicebear.com/api/micah/" + randomPic + "8.svg");
  $(".avatar10").attr("src", "https://avatars.dicebear.com/api/micah/" + randomPic + "9.svg");
});