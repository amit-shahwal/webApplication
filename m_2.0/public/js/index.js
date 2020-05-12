import '@babel/polyfill';
import { login,logout } from './login';
//import { logout } from '../../authController';

const loginForm=document.querySelector(".form")
const logOutBtn=document.querySelector(".nav__el--logout")

if(loginForm)
loginForm.addEventListener("submit", (eve) => {
    eve.preventDefault();
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
   
    login(email, password);
  });
  if(logOutBtn)
  logOutBtn.addEventListener("click", logout);
