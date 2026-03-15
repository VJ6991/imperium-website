import axios from "axios";
import { contactUsAPI } from "../contsants/constant";

export const sent_contact_us = (body) => {

     let config = {
      method: "post",
      url: contactUsAPI,
      headers: {
        "Content-Type": "application/json",
      },
      data : body,
    };

    return axios
      .request(config)
      .then((response) => response.data)
      .catch((error) => {
        console.error(error);
        throw error;
      });
  };
  