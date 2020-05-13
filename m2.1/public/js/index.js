import '@babel/polyfill';
import { login,logout,signup } from './login';
//import { logout } from '../../authController';

const loginForm=document.querySelector(".form--login")
const SingupForm=document.querySelector(".form--signup")
const logOutBtn=document.querySelector(".nav__el--logout")
const memegenrator=document.querySelector('.nav__el--meme')
if(loginForm)
loginForm.addEventListener("submit", (eve) => {
    eve.preventDefault();
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
   
    login(email, password);
  });
  if(logOutBtn)
  logOutBtn.addEventListener("click", logout);
  if(memegenrator)
  memegenrator.addEventListener("click", ()=>{
    window.open("https://adityasunny1189.github.io/Meme-World/");
  });
  if(SingupForm)
  SingupForm.addEventListener("submit", (eve) => {
      eve.preventDefault();
      const name = document.getElementById("name").value;
      const email = document.getElementById("email").value;
      const password = document.getElementById("password").value;
      const passwordConfirm = document.getElementById("passwordConfirm").value;
     
      signup(name,email,password,passwordConfirm);
    });