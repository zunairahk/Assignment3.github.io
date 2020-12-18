function Mpassword()
{
    s = document.getElementsByID("M_pass");
    if (s=="1234")
    {
        window.location.href="correct.html";
    }
    else
    {
        alert("Incorrect password-Try again");
    }
}