  function emailChange(elem) {
    // console.log('email', elem);
    // console.log('email value', elem.value);
    }

  function requiredValue (elem) {
    var exists = elem.value;
    var id = elem.id;
    var error = document.getElementById('error-'+id); // error-firstnme
    if (!elem.value) {
      error.style.display = 'inline';
    } else {
      error.style.display = 'none';
    }
  }

  function emailValidate (elem) {
    var email = elem.value;
    var id = elem.id;
    var error = document.getElementById('error-email-validation');
    var valid = document.getElementById('email-validation');
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var isEmail = re.test(email);
    if (isEmail) {
      error.style.display = 'none';
      valid.style.display = 'inline';
    } else if (!email) {
      error.style.display = 'none';
      valid.style.display = 'none';
    } else {
      error.style.display = 'inline';
      valid.style.display = 'none';
    }
  }


  function requiredValidation () {
    var required = ['email', 'firstname', 'lastname', 'username', 'password', 'phone_number'];
    var empty = required.filter ( function (id) {
      var elem = document.getElementById(id);
      // console.log('id');
      return !elem.value;
    });
    if (empty.length) {
      alert ( empty[0] + ' cannot be empty');
      document.getElementById(empty[0]).focus();
    } else {
      alert ('verified');
    }
  }

  function isNameCharacter (name) {
    var isChar = typeof name === "String";
  }

  function validationComplete () {
    requiredValidation ();
  }

  function numberValidation(elem){
    var phone=elem.value;
    var id=elem.id;
    var error=document.getElementById('errornum-'+id);
    var valid=document.getElementById('valnumber');
    var toNumber = Number(phone);
    if (isNaN(toNumber)) {
      error.style.display ="inline";
      valid.style.display ="none";
    } else if (!phone) {
      error.style.display ="none";
      valid.style.display ="none";
    } else {
      error.style.display ="none";
      valid.style.display ="inline";
    }
  }
