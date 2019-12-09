<?php
    $data = array(); 
    foreach ($data_penduduk->result_array() as $row)
    {
    $data[] = $row;
    }
    $sample_data = json_encode($data);
      // echo $sample_data;
            // echo $sql;
        ?>
        <script>
    
        $(function() {
            var jsonData = <?= $sample_data ?>;
            $('#bosdttable').dataTable({
             "processing" : true,
              dom: 'Bfrtip',
              buttons: ['copy', 'excel', 'csv',
                  {
                      extend: 'pdfHtml5',
                      orientation: 'landscape'
                  }
              ],
              "pageLength": 25,
            data: jsonData,
                columns: [
                    { data: 'nomor' },
                    { data: 'nomor' },
                    { data: 'no_kk' },
                    { data: 'nik' },
                    { data: 'nama_penduduk' },
                    { data: 'tempat_lahir' },
                    { data: 'tanggal_lahir' },
                    { data: 'umur' },
                    { data: 'jenis_kelamin' },
                    { data: 'pendidikan_terakhir' },
                    { data: 'pekerjaan' },
                    { data: 'status_perkawinan' },
                ], 
              columnDefs : [
              {
                targets : [0],
                render : function (data, type, row) {
                  var btn = "<center><a href=\"<?= base_url() ?>admin/detail_penduduk/"+data+"\" class=\"btn btn-success btn-round btn-xs\" target=\"_blank\"><span class=\"fas fa-plus\"></span></a></center>";
                  return btn;
    
                }
              },
              {
                targets : [1],
                render : function (data, type, row) {
                  var hsl = "<center><a href=\"<?= base_url() ?>admin/edit_penduduk/"+data+"\" class=\"btn btn-warning btn-round btn-xs\" target=\"_blank\"><span class=\"fas fa-edit\"></span> </a> <a href=\"<?= base_url() ?>admin/hapus_penduduk/"+data+"\" onclick=\"return confirm('Anda yakin ingin menghapus data ?')\" class=\"btn btn-danger btn-round btn-xs\"><span class=\"fas fa-trash\" ></span></a></center>";
                  return hsl;
    
                }
              }
              ]
      });
    
      });
    
        </script>
     <script>
    
        $(function() {
            var jsonData = <?= $sample_data ?>;
            $('#bosdttable1').dataTable({
             "processing" : true,
              dom: 'Bfrtip',
              buttons: ['copy', 'excel', 'csv',
                  {
                      extend: 'pdfHtml5',
                      orientation: 'landscape'
                  }
              ],
              "pageLength": 25,
            data: jsonData,
                columns: [
                    { data: 'nomor' },
                    { data: 'no_kk' },
                    { data: 'nik' },
                    { data: 'nama_penduduk' },
                    { data: 'tempat_lahir' },
                    { data: 'tanggal_lahir' },
                    { data: 'umur' },
                    { data: 'jenis_kelamin' },
                    { data: 'pendidikan_terakhir' },
                    { data: 'pekerjaan' },
                    { data: 'status_perkawinan' },
                ], 
              columnDefs : [
              {
                targets : [0],
                render : function (data, type, row) {
                  var btn = "<center><a href=\"<?= base_url() ?>admin/detail_penduduk/"+data+"\" class=\"btn btn-success btn-round btn-xs\" target=\"_blank\"><span class=\"fas fa-plus\"></span></a></center>";
                  return btn;
    
                }
              }
              ]
      });
    
      });
    
        </script>
