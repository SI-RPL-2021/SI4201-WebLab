@extends('layout')
@section('title', 'Home Page')
@section('konten')
<!-- konten -->
<h5>Selamat Datang, {{ Auth::user()->nama }}</h5>

@php 
    if ((Auth::user()->akses) == 'admin') { echo " <canvas id='chartKegiatan' width='100' height='20'></canvas> <br> <canvas id='chartAnggota' width='100' height='20'></canvas> "; 
    }else{
        echo "<canvas id='chartHadir' width='100' height='20'></canvas>";
    }   
@endphp

<script>
    var ctx = document.getElementById("chartHadir");
    var myChart = new Chart(ctx, {
        data: {
            labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
            datasets: [{
                    type: 'bar',
                    label: 'Rapat',
                    data: [@foreach($hadir as $hd)
                            {{$hd['nRapat']}},
                          @endforeach],
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255,99,132,1)',
                    borderWidth: 1
                },
                {
                    type: 'bar',
                    label: 'Pelatihan',
                    data: [@foreach($hadir as $hd)
                            {{$hd['nPelatihan']}},
                          @endforeach],
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                },
                {
                    type: 'line',
                    label: 'Hadir Rapat',
                    data: [@foreach($hadir as $hd)
                            {{$hd['rapat']}},
                          @endforeach],
                    backgroundColor: 'rgba(255, 159, 64)',
                    borderColor: 'rgba(255, 159, 64)',
                    borderWidth: 3
                },
                {
                    type: 'line',
                    label: 'Hadir Pelatihan',
                    data: [@foreach($hadir as $hd)
                            {{$hd['pelatihan']}},
                          @endforeach],
                    backgroundColor: 'rgba(153, 102, 255)',
                    borderColor: 'rgba(153, 102, 255)',
                    borderWidth: 3,
                }]
        },
        options: {
            scales: {
                yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
            }
        }
    });
</script>
<script>
    var ctx = document.getElementById("chartKegiatan");
    var myChart = new Chart(ctx, {
        data: {
            labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
            datasets: [{
                    type: 'bar',
                    label: 'Rapat',
                    data: [@foreach($hadir as $hk)
                            {{$hk['nRapat']}},
                          @endforeach],
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255,99,132,1)',
                    borderWidth: 1
                },
                {
                    type: 'bar',
                    label: 'Pelatihan',
                    data: [@foreach($hadir as $hk)
                            {{$hk['nPelatihan']}},
                          @endforeach],
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
        }]
        },
        options: {
            scales: {
                yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
            }
        }
    });
    
</script>
<script>
    var ctx = document.getElementById("chartAnggota");
    var myChart = new Chart(ctx, {
        data: {
            labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
            datasets: [
                {
                    type: 'bar',
                    label: 'Anggota',
                    data: [@foreach($hadir as $ha)
                            {{$ha['anggotaBerjalan']}},
                          @endforeach],
                    backgroundColor: 'rgba(221, 160, 2217, 0.2)',
                    borderColor: 'rgba(221, 160, 221,1)',
                    borderWidth: 1
        }]
        },
        options: {
            scales: {
                yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
            }
        }
    });
    
</script>

@endsection