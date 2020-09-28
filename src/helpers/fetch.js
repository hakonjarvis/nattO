export const get = async (endpoint) => {
  let response = await fetch(`http://localhost:3000/api/${endpoint}`);
  let data = await response.json();

  return data;
};
