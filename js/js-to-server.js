// https://stackoverflow.com/a/47065313
export function post(data) {
  fetch("post.php", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify(data),
  });
}
