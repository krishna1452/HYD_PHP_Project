
function valid() {
    let uname = document.contact.uname.value;
    let email = document.contact.email.value;
    let phone = document.contact.phone.value;
    let message = document.contact.message.value;
    let alphaExp = /^[a-zA-Z]+$/
    let emailExp = /^\s*[\w\-\+_]+(\.[\w\-\+_]+)*\@[\w\-\+_]+\.[\w\-\+_]+(\.[\w\-\+_]+)*\s*$/
    let numExp = /^[0-9]+$/
    let userStatus = false
    let emailStatus = false
    let numStatus = false
    let msgStatus = false

    //alert(uname);
    //name validation
    if (uname == "") {
        document.getElementById("unote").innerHTML = "<h6 class='text-danger text-end'>Please Enter Name</h6>"
        userStatus = false
    } else {
        if (uname.match(alphaExp)) {
            document.getElementById("unote").innerHTML = ""
            userStatus = true
        } else {
            document.getElementById("unote").innerHTML = "<h6 class='text-danger text-end'>only characters</h6>"
            userStatus = false
        }
    }


    //email validation
    if (email == "") {
        document.getElementById("enote").innerHTML = "<h6 class='text-danger text-end'>Please Enter valid mail id</h6>"
        emailStatus = false
    } else {
        if (email.match(emailExp)) {
            document.getElementById("enote").innerHTML = ""
            emailStatus = true
        } else {
            document.getElementById("enote").innerHTML = "<h6 class='text-danger text-end'>please enter like this(@gmail.com)</h6>"
            emailStatus = false
        }
    }

    //number validation
    if (phone == "") {
        document.getElementById("pnote").innerHTML = "<h6 class='text-danger text-end'>Please Enter Number</h6>"
        numStatus = false
    } else {
        if (phone.match(numExp)) {
            document.getElementById("pnote").innerHTML = ""
            numStatus = true
        } else {
            document.getElementById("pnote").innerHTML = "<h6 class='text-danger text-end'>Enter only digits</h6>"
            numStatus = false
        }
    }

    //message validation
    if (message == "") {
        document.getElementById("mnote").innerHTML = "<h6 class='text-danger text-end'>Please,leave us a message.</h6>"
        msgStatusStatus = false
    } else {
        document.getElementById("mnote").innerHTML = ""
        msgStatus = true
    }


    //for success return
    if (userStatus == true && emailStatus == true && numStatus == true && msgStatus == true) {
        return true
    } else {
        return false
    }

}

// .............................................

function valid1() {
    let cname = document.stureg.cname.value;
    let sname = document.stureg.sname.value;
    let semail = document.stureg.semail.value;
    let sphone = document.stureg.sphone.value;
    let smessage = document.stureg.smessage.value;
    let alphaExp = /^[a-zA-Z]+$/
    let stuExp = /^[a-zA-Z]+$/
    let emailExp = /^\s*[\w\-\+_]+(\.[\w\-\+_]+)*\@[\w\-\+_]+\.[\w\-\+_]+(\.[\w\-\+_]+)*\s*$/
    let numExp = /^[0-9]+$/
    let couStatus = false
    let stuStatus = false
    let semailStatus = false
    let snumStatus = false
    let smsgStatus = false

    //alert(uname);
    //cname validation
    if (cname == "") {
        document.getElementById("cnote").innerHTML = "<h6 class='text-danger text-end'>Please Enter course Name</h6>"
        couStatus = false
    } else {
        if (cname.match(alphaExp)) {
            document.getElementById("cnote").innerHTML = ""
            couStatus = true
        } else {
            document.getElementById("cnote").innerHTML = "<h6 class='text-danger text-end'>only characters</h6>"
            couStatus = false
        }
    }
    //sname validation
    if (sname == "") {
        document.getElementById("nnote").innerHTML = "<h6 class='text-danger text-end'>Please Enter Name</h6>"
        stuStatus = false
    } else {
        if (sname.match(stuExp)) {
            document.getElementById("nnote").innerHTML = ""
            stuStatus = true
        } else {
            document.getElementById("nnote").innerHTML = "<h6 class='text-danger text-end'>only characters</h6>"
            stuStatus = false
        }
    }


    //email validation
    if (semail == "") {
        document.getElementById("enote").innerHTML = "<h6 class='text-danger text-end'>Please Enter valid mail id</h6>"
        semailStatus = false
    } else {
        if (semail.match(emailExp)) {
            document.getElementById("enote").innerHTML = ""
            semailStatus = true
        } else {
            document.getElementById("enote").innerHTML = "<h6 class='text-danger text-end'>please enter like this(@gmail.com)</h6>"
            semailStatus = false
        }
    }

    //number validation
    if (sphone == "") {
        document.getElementById("pnote").innerHTML = "<h6 class='text-danger text-end'>Please Enter Number</h6>"
        snumStatus = false
    } else {
        if (sphone.match(numExp)) {
            document.getElementById("pnote").innerHTML = ""
            snumStatus = true
        } else {
            document.getElementById("pnote").innerHTML = "<h6 class='text-danger text-end'>Enter only digits</h6>"
            snumStatus = false
        }
    }

    //message validation
    if (smessage == "") {
        document.getElementById("mnote").innerHTML = "<h6 class='text-danger text-end'>Please,leave us a message.</h6>"
        smsgStatus = false
    } else {
        document.getElementById("mnote").innerHTML = ""
        smsgStatus = true
    }


    //for success return
    if (couStatus == true && stuStatus == true && semailStatus == true && snumStatus == true && smsgStatus == true) {
        return true
    } else {
        return false
    }

}

// ........................................

function valid2() {
    let sname = document.instructor.sname.value;
    let semail = document.instructor.semail.value;
    let sskils = document.instructor.sskils.value;
    let sphone = document.instructor.sphone.value;
    let sfile = document.instructor.sfile.value;
    let ssub = document.instructor.ssub.value;
    let smessage = document.instructor.smessage.value;
    let snameExp = /^[a-zA-Z]+$/
    let emailExp = /^\s*[\w\-\+_]+(\.[\w\-\+_]+)*\@[\w\-\+_]+\.[\w\-\+_]+(\.[\w\-\+_]+)*\s*$/
    let numExp = /^[0-9]+$/
    let sStatus = false
    let semailStatus = false
    let sskilsStatus = false
    let snumStatus = false
    let sfileStatus = false
    let subStatus = false
    let smsgStatus = false

    //alert(uname);
    //sname validation
    if (sname == "") {
        document.getElementById("nnote").innerHTML = "<h6 class='text-danger text-end'> Name is required</h6>"
        sStatus = false
    } else {
        if (sname.match(snameExp)) {
            document.getElementById("nnote").innerHTML = ""
            sStatus = true
        } else {
            document.getElementById("nnote").innerHTML = "<h6 class='text-danger text-end'>only characters</h6>"
            sStatus = false
        }
    }


    //email validation
    if (semail == "") {
        document.getElementById("enote").innerHTML = "<h6 class='text-danger text-end'>Please Enter valid mail id</h6>"
        semailStatus = false
    } else {
        if (semail.match(emailExp)) {
            document.getElementById("enote").innerHTML = ""
            semailStatus = true
        } else {
            document.getElementById("enote").innerHTML = "<h6 class='text-danger text-end'>please enter like this(@gmail.com)</h6>"
            semailStatus = false
        }
    }
    //skils validation
    if (sskils == "") {
        document.getElementById("snote").innerHTML = "<h6 class='text-danger text-end'>Subject is required.</h6>"
        sskilsStatus = false
    } else {
        document.getElementById("snote").innerHTML = ""
        sskilsStatus = true
    }


    //number validation
    if (sphone == "") {
        document.getElementById("pnote").innerHTML = "<h6 class='text-danger text-end'>Please Enter Number</h6>"
        snumStatus = false
    } else {
        if (sphone.match(numExp)) {
            document.getElementById("pnote").innerHTML = ""
            snumStatus = true
        } else {
            document.getElementById("pnote").innerHTML = "<h6 class='text-danger text-end'>Enter only digits</h6>"
            snumStatus = false
        }
    }

    //exp validation
    if (sfile == "") {
        document.getElementById("fnote").innerHTML = "<h6 class='text-danger text-end'>Resume is required.</h6>"
        sfileStatus = false
    } else {
        document.getElementById("fnote").innerHTML = ""
        sfileStatus = true
    }

    //exp validation
    if (ssub == "") {
        document.getElementById("subnote").innerHTML = "<h6 class='text-danger text-end'>Subject is required.</h6>"
        subStatus = false
    } else {
        document.getElementById("subnote").innerHTML = ""
        subStatus = true
    }

    //message validation
    if (smessage == "") {
        document.getElementById("mnote").innerHTML = "<h6 class='text-danger text-end'>Please,leave us a message.</h6>"
        smsgStatus = false
    } else {
        document.getElementById("mnote").innerHTML = ""
        smsgStatus = true
    }


    //for success return
    if (sStatus == true && semailStatus == true && sskilsStatus == true && snumStatus == true && sfileStatus == true && subStatus == true && smsgStatus == true) {
        return true
    } else {
        return false
    }


}
