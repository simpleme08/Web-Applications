const table = document.getElementById('emp');

const rows = table.getElementsByTagName('tr');

Array.from(rows).forEach((row, index) => {
  row.addEventListener('click', () => {
    const cells = row.getElementsByTagName('td');
    console.log(cells[0]);
    console.log(cells[1]);

    const content1 = cells[0].innerHTML;
    console.log(content1);

    const content2 = cells[1].innerHTML;
    console.log(content2);
  });
});
