function validate(Email, PhoneNo, Name, MatricNo,Address,homeAddress,homeNo) {

  var Email = document.getElementById('email');
  var PhoneNo = document.getElementById('PhoneNo');
  var MatricNo = document.getElementById('MatricNo');
  var Address = document.getElementById('Address');
  var homeAddress = document.getElementById('homeAddress');
  var homeNo = document.getElementById('homeNo');

    const emailRegex = "a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$";
    const PhoneNoRegex = "[0-9]";
    const homeNoRegex = "[0-9]";
    const MatricNoRegex = "[0-9]";
    const NameRegex = "[A-Za-z]+";
    const AddressRegex = "[A-Za-z]+";
    const homeAddressRegex = "[A-Za-z]+";

  
    if (!emailRegex.test(Email)) {
      alert('Invalid email address');
      return false;
    }
  
    if (!PhoneNoRegex.test(PhoneNo)) {
       alert('Invalid phone number');
       return false;
    }

    if (!NameRegex.test(Name)) {
         alert('Invalid Name');
         return false;
      }

      if (!MatricNoRegex.test(MatricNo)) {
        alert('Invalid Matric number');
        return false;
      }

      if (!homeNoRegex.test(homeNo)) {
       alert('Invalid Home number');
       return false;
      }
      if (!AddressRegex.test(Address)) {
       alert('Invalid Address');
       return false;
      }

      if (!homeAddressRegex.test(homeAddress)) {
     alert('Invalid Home Address');
     return false;
      }
    

 }
  