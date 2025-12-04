// Load external HTML files into the main page
async function loadHTML(id, file) {
  const response = await fetch(file);
  const html = await response.text();
  document.getElementById(id).innerHTML = html;
}

loadHTML('header', 'header.html');
loadHTML('content', 'maincontent.html');
loadHTML('footer', 'footer.html');
