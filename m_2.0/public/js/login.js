//const axios = require("axios");
//export the login function
import axios from "axios";
import { showAlert } from "./alert";
export const login = async (email, password) => {
  try {
    const res = await axios({
      method: "POST",
      url: "http://127.0.0.1:9000/api/v1/users/login",
      data: {
        email: email,
        password: password,
      },
    });
    console.log(res.data.status);

    if (res.data.status === "success") {
      showAlert("success", "Logged in successfully!");
      window.location = "/login";
    }
  } catch (err) {
    showAlert("error", err.response.data.message);
  }
};

export const logout = async () => {
  try {
    const res = await axios({
      method: "GET",
      url: "http://127.0.0.1:9000/api/v1/users/logout",
    });
    if ((res.data.status === "success")) location.reload(true);
  } catch (err) {
    showAlert("error", "error in logging out");
  }
};
