// document.querySelector(".uk_btn").addEventListener("click", ()=>{
//     const destination_name = document.querySelector("#uk").textContent;
//     document.querySelector("#place").value = destination_name;
//     place.value = destination_name;
//     alert("Your Selected Countory is : "+destination_name);
//     localStorage.setItem("price", 465000); 
//   localStorage.setItem("destination_name", destination_name);
// });
document.querySelector(".uk_btn").addEventListener("click", () => {
    destination_name = document.querySelector("#uk").textContent;
    document.querySelector("#price").value = 465000;
    document.querySelector("#place").value = destination_name;
    alert("Your Selected Country is: " + destination_name);
    localStorage.setItem("price", 465000);
});

document.querySelector(".fr_btn").addEventListener("click", ()=>{
    destination_name = document.querySelector("#fr").textContent;
    document.querySelector("#price").value = 365000;
    place.value = destination_name;
    alert("Your Selected Countory is : "+destination_name);
    localStorage.setItem("price", 365000);
});

document.querySelector(".gr_btn").addEventListener("click", ()=>{
    destination_name = document.querySelector("#gr").textContent;
 document.querySelector("#price").value = 145901;
    place.value = destination_name;
    alert("Your Selected Countory is : "+destination_name);
    localStorage.setItem("price", 145901);
});

document.querySelector(".it_btn").addEventListener("click", ()=>{
    destination_name = document.querySelector("#it").textContent;
     document.querySelector("#price").value = 489700;
    place.value = destination_name;
    alert("Your Selected Countory is : "+destination_name);
    localStorage.setItem("price", 489700);
});

document.querySelector(".ind_btn").addEventListener("click", ()=>{
    destination_name = document.querySelector("#ind").textContent;
        document.querySelector("#price").value = 124500;
    place.value = destination_name;
    alert("Your Selected Countory is : "+destination_name);
    localStorage.setItem("price", 124500);
});

document.querySelector(".us_btn").addEventListener("click", ()=>{
    destination_name = document.querySelector("#us").textContent;
    document.querySelector("#price").value = 430600;
    place.value = destination_name;
    alert("Your Selected Countory is : "+destination_name);
    localStorage.setItem("price", 430600);
});


document.querySelector(".submit").addEventListener("click", ()=>{
    // if (document.querySelector("#name").value == "" || document.querySelector("#email").value == "" || document.querySelector("#phone").value == "" || document.querySelector("#place").value == "" || document.querySelector("#date").value == "") {
    //     alert("Please Fill All The Fields");
    //     return;
    // }
    // else{
    //     alert("Your Form is Submitted Successfully. Thank You for Choosing Us. We will contact you soon.");
    //     window.location.href = "pay.html";
    // }
    // alert("Your Form is Submitted Successfully. Thank You for Choosing Us. We will contact you soon.");
        // window.location.href = "pay.html";
})