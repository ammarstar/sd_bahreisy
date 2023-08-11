function ambil_login(){
  var a=document.getElementById('x');
  a.parentElement.removeChild(a);
  var b=document.getElementById('y');
  b.parentElement.removeChild(b);
  var c=document.getElementsByTagName('div')[0];

  var header=document.createElement('h3');
  header.innerHTML=">>> halaman login";
  c.appendChild(header);

  var form=document.createElement('form');
  form.className="login_form";
  c.appendChild(form);

  var label1=document.createElement('label');
  label1.innerHTML="Email";
  form.appendChild(label1);
  var input1=document.createElement('input');
  input1.className="login_input";
  input1.placeholder="masukkan email";
  input1.type="text";
  form.appendChild(input1);

  var label2=document.createElement('label');
  label2.innerHTML="Password";
  form.appendChild(label2);
  var input2=document.createElement('input');
  input2.className="login_input";
  input2.placeholder="masukkan password";
  input2.type="password";
  form.appendChild(input2);

  var tombol=document.createElement('button');
  tombol.className="login_tombol";
  tombol.type="submit";
  tombol.innerHTML="Login";
  tombol.name='masuk';
  form.appendChild(tombol);
}

function ambil_register() {
  var a=document.getElementById('x');
  a.parentElement.removeChild(a);
  var b=document.getElementById('y');
  b.parentElement.removeChild(b);

  var div=document.getElementsByTagName('div')[0];

  var header=document.createElement('h3');
  header.innerHTML=">>> halaman register";
  div.appendChild(header);

  var form=document.createElement('form');
  form.className="login_form";
  div.appendChild(form);

  var label1=document.createElement('label');
  label1.innerHTML="Nama Lengkap";
  form.appendChild(label1);
  var input1=document.createElement('input');
  input1.className="login_input";
  input1.placeholder="masukkan nama anda";
  form.appendChild(input1);

  var label2=document.createElement('label');
  label2.innerHTML="Email";
  form.appendChild(label2);
  var input2=document.createElement('input');
  input2.className="login_input";
  input2.placeholder="masukkan email anda";
  form.appendChild(input2);

  var label3=document.createElement('label');
  label3.innerHTML="Password";
  form.appendChild(label3);
  var input3=document.createElement('input');
  input3.className="login_input";
  input3.type="password";
  input3.placeholder="masukkan password anda";
  form.appendChild(input3);

  var tombol=document.createElement('button');
  tombol.type="submit";
  tombol.className="login_tombol";
  tombol.innerHTML="register";
  form.appendChild(tombol);
}
function kembali() {
  window.history.back();
}
