fetch('http://localhost/Ajax_PHP/clients.php') 
    .then(reponse => reponse.json())
    .then(data => 

        // console.log(res)
    $(document).ready( function () {
        $('#myTable').DataTable( {
        data: data,
        columns: [
            { data: 'id' },
            { data: 'nomCli' },
            { data: 'adrCli' },
            { data: 'villeCli' },
            { data: 'id_commercial' }
        ]
    }) 
})
)
