var countVar = 0;

function count(){
    if(countVar === 0){
        document.getElementById('keeper').innerHTML = ++countVar;
    }
    else
    {
        document.getElementById('keeper').innerHTML = --countVar;
    }
}

function toggleText(button_id)
{
    var el = document.getElementById(button_id);
    if (el.firstChild.data === "Like")
    {
        el.firstChild.data = "Unlike";
    }
    else
    {
        el.firstChild.data = "Like";
    }
}
