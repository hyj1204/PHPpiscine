
window.onload = function() {
    document.getElementById("new").addEventListener("click", addNew);//点击new元素的时候，执行函数addNew
    ft_list = document.getElementById("ft_list");
    var tmp = document.cookie; //document.cookie 将以字符串的方式返回所有的 cookie，类型格式： cookie1=value; cookie2=value; cookie3=value;
    if (tmp) {
        cookie = JSON.parse(tmp);
        cookie.forEach(addIntoList);
    }
}

window.onunload = function() {
    var list = ft_list.children;
    var cookie = [];
    for (var i = 0; i < list.length; i++)
    {
        cookie.unshift(list[i].innerHTML);
    }
    document.cookie = JSON.stringify(cookie);
}



function addNew() {
    var add = prompt("What will you do?");//返回值是用户输入的字符串
    if (add)
        addIntoList(add);
}

function addIntoList(add) {
    var div = document.createElement("div") //创建节点元素div
    div.innerHTML = add; //把输入文字设为这个元素在>和<之间的值
    div.addEventListener("click", rmList); //点击这个元素执行rmList函数
    ft_list.insertBefore(div, ft_list.firstChild);//在第一个节点前插入一个新节点
}

function rmList (){
    if (confirm("Are you sure to delete this task?"))
        this.remove();
}