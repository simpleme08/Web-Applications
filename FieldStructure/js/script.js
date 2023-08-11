
var table = document.getElementById('emp');
                
for(var i = 1; i < table.rows.length; i++)
{
    table.rows[i].onclick = function()
    {
         //rIndex = this.rowIndex;
         document.getElementById("empcode").value = this.cells[1].innerHTML;
        
    };
}