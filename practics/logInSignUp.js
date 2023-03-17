// /*document.addEventListener("DOMContentLoaded", ()=>{

//     const loginForm=document.querySelector("#logIn");
//     const createAccountForm=document.querySelector("#signUp")


//     document.querySelector("#createAcount").addEventListener("click",()=>{
//         loginForm.classList.add("formHide");

//     createAccountForm.classList.remove("formHide");
//     });

//     document.querySelector("#createAcount").addEventListener("click",()=>{
//         createAccountForm.classList.add("formHide");

//         loginForm.classList.remove("formHide");
//     });
// });*/

// // const forms=document.querySelectorAll(".container"),
// //        passwordShowHide=document.querySelectorAll('.eye-icon'),
// //        links=document.querySelectorAll('.link');



// //        console.log(passwordShowHide,links,forms)


// const logInForm=document.querySelector('.login');
// const SignUpForm=document.querySelector('.SignUp')
// console.log(logInForm);
// console.log(SignUpForm)

// document.querySelector('#createAcount').addEventListener('click',()=>{

//       logInForm.classList.add(".formHide");
//       SignUpForm.classList.remove('.formHide');

// })

// /* const userName=document.forms.querySelector('.for_inputFields');
// console.log(userName)

// // userName.addEventListener('click', function(e){
// //     e.preventDefault();
//     const value=userName.add('input[type="text"]').value;
//     console.log(value) */

// // })

// /* function validateForm() {
//     let x = document.forms["myForm"]["fname"].value;
//     let y=document.forms["myForm"]["Sname"].value;
//     let c=y.length;
//     console.log(x.length)
//     let b=x.length;
//     if (x == "") {
//       alert("First Name must be filled out");
//     //   return false;
//     }
//     else if(b<4 && b>8)
//     {
//         alert("First Name Must be contain more than 4 & less than 8 character");
//         // return false;  
//     }
//     else if(y== ""){
//         alert("Last Name must be filled out ");
//     }

//     else if(c<4 && c>8){
//         alert("Last Name Must be contain more than 4 & less than 8 character");
//     }
//     // else{
//     //     alert("you SuccesFully Submitted Your Form");
        
//     // }

    
//   } */


// function signUp() {
//     var fname = document.getElementById('fname').value;
//     var Sname = document.getElementById('Sname').value;
//     var email = document.getElementById('email').value;
//     var password = document.getElementById('password').value;
//     var ConfirmPassword = document.getElementById('ConfirmPassword').value;

//     var lcCharacter = /[a-z]/g;
//     var upperCaseLetters = /[A-Z]/g;
//     var numbers = /[0-9]/g;
//     var special = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;



//     if (fname.length == 0 || fname.length == null) {
//         alert("Name cant be empty")
//     }
//     else if (fname.length <= 2 || fname.length >= 40) {
//         alert("Name has to be between 2 to 40 characters")
//     }
//     else if (email.length == 0) {
//         alert("Please fill in email");
//     } else if (password.length == 0) {
//         alert("Please fill in password");
//     } else if (password.length < 8) {
//         alert("Minmum of password 8");
//     } else if (!password.match(numbers)) {
//         alert("please add 1 number in password");
//     } else if (!password.match(upperCaseLetters)) {
//         alert("please add 1 uppercase letter in password");
//     } else if (!password.match(lcCharacter)) {
//         alert("please add 1 lowercase letter in password");
//     } else if (!password.match(special)) {
//         alert("please add 1 special letter");
//     } else if (ConfirmPassword != password) {
//         alert("password and confirm password should match");
//     }
//     else {

//         localStorage.setItem('fname', fname);
//         localStorage.setItem('Sname', Sname);
//         localStorage.setItem('userEmail', email);
//         localStorage.setItem('userPwd', password);

//         alert("Sign Up Successful");
//     }
// }


// function logIn(){
//     var emailin = document.getElementById('emailIn').value;
//     var passin = document.getElementById('passwordIn').value;

//     var storedEmail = localStorage.getItem('email');
//     var storedPass = localStorage.getItem('password');

//     if(emailin ==  storedEmail)
//     {
//         if(passin == storedPass)
//         {
//             alert("Login Successful")
//         }
//         else
//         {
//             alert("Wrong Password, Try Again")  
//         }
//     }
//     else
//     {
//         alert("Invalid Credentials")
//     }
//     //     if(emailin ==  storedEmail && passin == storedPass)
//     // {

//     //         alert("Login Successful")
//     // }
//     // else
//     //     {
//     //         alert("Wrong Password, Try Again")  
//     //     }
    
//     // // {
//     // //     alert("Invalid Credentials")
//     // // }
// }