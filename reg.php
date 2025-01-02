<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <!--bootstrap 5 icons cdn-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Information</title>
    <style>

         table tr td{
    vertical-align: middle;
}

td button{
    margin: 5px;
}

td button i{
    font-size: 20px;
}


.modal-header{
    background: #0d6efd;
    color: #fff;
}

.modal-body form {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: 0;
}

.modal-body form .imgholder{
    width: 200px;
    height: 200px;
    position: relative;
    border-radius: 20px;
    overflow: hidden;
}

.imgholder .upload{
    position: absolute;
    bottom: 0;
    left: 10;
    width: 100%;
    height: 100px;
    background: rgba(0,0,0,0.3);
    display: none;
    justify-content: center;
    align-items: center;
    cursor: pointer;
}

.upload i{
    color: #fff;
    font-size: 35px;
}

.imgholder:hover .upload{
    display: flex;
}

.imgholder .upload input{
    display: none;
}

.modal-body form .inputField{
    flex-basis: 68%;
    border-left: 5px groove blue;
    padding-left: 20px;
}

form .inputField > div{
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

form .inputField > div label{
    font-size: 20px;
    font-weight: 500;
}

#userForm form .inputField > div label::after{
    content: "*";
    color: red;
}

form .inputField > div input{
    width: 75%;
    padding: 10px;
    border: none;
    outline: none;
    background: transparent;
    border-bottom: 2px solid blue;
}

.modal-footer .submit{
    font-size: 18px;
}


#readData form .inputField > div input{
    color: #000;
    font-size: 18px;
}
    </style>
</head>
<body>
    <section class="p-3">

        <div class="row">
            <div class="col-12">
                <button class="btn btn-primary newUser" data-bs-toggle="modal" data-bs-target="#userForm">srudent Details <i class="bi bi-people"></i></button>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-hover mt-3 text-center table-bordered">

                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Picture</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Address</th>
                            <th>Contact No.</th>
                            <th>Registration</th>
                            <th>Session</th>
                            <th>DOB</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody id="data"></tbody>

                </table>
            </div>
        </div>

    </section>

   <!--Modal Form-->
   <div class="modal fade" id="userForm">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Fill the Form</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <form action="#" id="myForm">

                    <div class="card imgholder">
                        <label for="imgInput" class="upload">
                            <input type="file" name="" id="imgInput">
                            <i class="bi bi-plus-circle-dotted"></i>
                        </label>
                        <img src="./image/Profile Icon.webp" alt="" width="200" height="200" class="img">
                    </div>

                    <div class="inputField">
                        <div>
                            <label for="name"> First Name:</label>
                            <input type="text" name="" id="name" required>
                        </div>
                        <div>
                            <label for="branch">Last Name:</label>
                            <input type="text" name="" id="branch" required>
                        </div>
                        <div>
                            <label for="rollno">Address:</label>
                            <input type="text" name="" id="rollno" required>
                        </div>
                        <div>
                            <label for="email">Contact No:</label>
                            <input type="text" name="" id="email" required>
                        </div>
                        <div>
                            <label for="phone">class Roll:</label>
                            <input type="text" name="" id="phone" required>
                        </div>
                        <div>
                            <label for="post">session:</label>
                            <input type="text" name="" id="post" required>
                        </div>
                        <div>
                            <label for="session">Branch:</label>
                            <input type="date" name="" id="session" required>
                        </div>
                    </div>

                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" form="myForm" class="btn btn-primary submit">Submit</button>
            </div>
        </div>
    </div>
</div>

<!--Read Data Modal-->
<div class="modal fade" id="readData">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Profile</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <form action="#" id="myForm">

                    <div class="card imgholder">
                        <img src="./image/Profile Icon.webp" alt="" width="200" height="200" class="showImg">
                    </div>

                    <div class="inputField">
                        <div>
                            <label for="name">Name:</label>
                            <input type="text" name="" id="showName" disabled>
                        </div>
                        <div>
                            <label for="branch">Author:</label>
                            <input type="text" name="" id="showBranch" disabled>
                        </div>
                        <div>
                            <label for="rollno">Publisher:</label>
                            <input type="text" name="" id="showRollNo" disabled>
                        </div>
                        <div>
                            <label for="email">ISBN No:</label>
                            <input type="text" name="" id="showEmail" disabled>
                        </div>
                        <div>
                            <label for="phone">Number Of Copy:</label>
                            <input type="text" name="" id="showPhone" minlength="11" maxlength="11" disabled>
                        </div>
                        <div>
                            <label for="post">Status:</label>
                            <input type="text" name="" id="showPost" disabled>
                        </div>
                        <div>
                            <label for="session">Updated On:</label>
                            <input type="year" name="" id="showSession" disabled>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
var form = document.getElementById("myForm"),
imgInput = document.querySelector(".img"),
file = document.getElementById("imgInput"),
userName = document.getElementById("name"),
branch = document.getElementById("branch"),
rollno = document.getElementById("rollno"),
email = document.getElementById("email"),
phone = document.getElementById("phone"),
post = document.getElementById("post"),
session = document.getElementById("session"),
submitBtn = document.querySelector(".submit"),
userInfo = document.getElementById("data"),
modal = document.getElementById("userForm"),
modalTitle = document.querySelector("#userForm .modal-title"),
newUserBtn = document.querySelector(".newUser")


let getData = localStorage.getItem('userProfile') ? JSON.parse(localStorage.getItem('userProfile')) : []

let isEdit = false, editId
showInfo()

newUserBtn.addEventListener('click', ()=> {
submitBtn.innerText = 'Submit',
modalTitel.innerText = "Fill the Form"
isEdit = false
imgInput.src = "./image/Profile Icon.webp"
form.reset()
})


file.onchange = function(){
if(file.files[0].size < 1000000){  // 1MB = 1000000
    var fileReader = new FileReader();

    fileReader.onload = function(e){
        imgUrl = e.target.result
        imgInput.src = imgUrl
    }

    fileReader.readAsDataURL(file.files[0])
}
else{
    alert("This file is too large!")
}
}


function showInfo(){
document.querySelectorAll('.employeeDetails').forEach(info => info.remove())
getData.forEach((element, index) => {
    let createElement = `<tr class="employeeDetails">
        <td>${index+1}</td>
        <td><img src="${element.picture}" alt="" width="50" height="50"></td>
        <td>${element.employeeName}</td>
        <td>${element.employeeBranch}</td>
        <td>${element.employeeRollNo}</td>
        <td>${element.employeeEmail}</td>
        <td>${element.employeePhone}</td>
        <td>${element.employeePost}</td>
        <td>${element.employeeSession}</td>


        <td>
            <button class="btn btn-success" onclick="readInfo('${element.picture}', '${element.employeeName}', '${element.employeeBranch}', '${element.employeeRollNo}', '${element.employeeEmail}', '${element.employeePhone}', '${element.employeePost}', '${element.employeeSession}')" data-bs-toggle="modal" data-bs-target="#readData"><i class="bi bi-eye"></i></button>

            <button class="btn btn-primary" onclick="editInfo(${index}, '${element.picture}', '${element.employeeName}', '${element.employeeBranch}', '${element.employeeRollNo}', '${element.employeeEmail}', '${element.employeePhone}', '${element.employeePost}', '${element.employeeSession}')" data-bs-toggle="modal" data-bs-target="#userForm"><i class="bi bi-pencil-square"></i></button>

            <button class="btn btn-danger" onclick="deleteInfo(${index})"><i class="bi bi-trash"></i></button>
                        
        </td>
    </tr>`

    userInfo.innerHTML += createElement
})
}
showInfo()


function readInfo(pic, name, branch, rollno, email, phone, post, session){
document.querySelector('.showImg').src = pic,
document.querySelector('#showName').value = name,
document.querySelector("#showBranch").value = branch,
document.querySelector("#showRollNo").value = rollno,
document.querySelector("#showEmail").value = email,
document.querySelector("#showPhone").value = phone,
document.querySelector("#showPost").value = post,
document.querySelector("#showSession").value = session
}


function editInfo(index, pic, name, Branch, RollNo, Email, Phone, Post, Session){
isEdit = true
editId = index
imgInput.src = pic,
userName.value = name,
branch.value = Branch,
rollno.value =RollNo,
email.value = Email,
phone.value = Phone,
post.value = Post,
session.value = Session

submitBtn.innerText = "Update"
modalTitle.innerText = "Update The Form"
}


function deleteInfo(index){
if(confirm("Are you sure want to delete?")){
    getData.splice(index, 1)
    localStorage.setItem("userProfile", JSON.stringify(getData))
    showInfo()
}
}


form.addEventListener('submit', (e)=> {
e.preventDefault()

const information = {
    picture: imgInput.src == undefined ? "./image/Profile Icon.webp" : imgInput.src,
    employeeName: userName.value,
    employeeBranch: branch.value,
    employeeRollNo: rollno.value,
    employeeEmail: email.value,
    employeePhone: phone.value,
    employeePost: post.value,
    employeeSession: session.value
}

if(!isEdit){
    getData.push(information)
}
else{
    isEdit = false
    getData[editId] = information
}

localStorage.setItem('userProfile', JSON.stringify(getData))

submitBtn.innerText = "Submit"
modalTitle.innerHTML = "Fill The Form"

showInfo()

form.reset()

imgInput.src = "./image/Profile Icon.webp"  

// modal.style.display = "none"
// document.querySelector(".modal-backdrop").remove()
})
</script> 
</body>
</html>

