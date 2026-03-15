export const convertDateString = (date) => {
  var year = date.getUTCFullYear();
  var month = String(date.getUTCMonth() + 1).padStart(2, "0");
  var day = String(date.getUTCDate()).padStart(2, "0");

  var formattedDate = `${day}-${month}-${year}`;
  return formattedDate;
};

export const validateEmail = (email) => {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
};

export const isValidDateFormat = (str) => {
  const regex = /^\d{2}-\d{2}-\d{4}$/;
  return regex.test(str);
};

export const curentYear = new Date().getFullYear();
