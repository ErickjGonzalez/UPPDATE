<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard del Rector</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    body {
      padding: 2rem;
      background-color: #f8f9fa;
    }
    .card {
      border-radius: 1rem;
    }
    .card-title {
      font-weight: bold;
    }
  </style>
</head>
<body>

  <h1 class="mb-4">Dashboard del Rector</h1>

  <div class="row mb-4">
    <div class="col-md-6">
      <div class="card text-white bg-primary mb-3">
        <div class="card-body">
          <h5 class="card-title">Total de Aspirantes</h5>
          <p class="card-text fs-3">{{ $totalAspirantes }}</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card text-white bg-success mb-3">
        <div class="card-body">
          <h5 class="card-title">Con Discapacidad</h5>
          <p class="card-text fs-3">{{ $conDiscapacidad }}</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card text-white bg-warning mb-3">
        <div class="card-body">
          <h5 class="card-title">Hablan Lengua Indígena</h5>
          <p class="card-text fs-3">{{ $hablaLengua }}</p>
        </div>
      </div>
    </div>
  </div>

  <div class="row mb-4">
    <div class="col-md-6">
      <div class="card p-3">
        <h5 class="card-title">Aspirantes por Carrera</h5>
        <canvas id="carreraChart" height="200"></canvas>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card p-3">
        <h5 class="card-title">Top 5 Estados de Procedencia</h5>
        <canvas id="estadoChart" height="200"></canvas>
      </div>
    </div>
  </div>

  <script>
    const carreraLabels = [
      @foreach($porCarrera as $c)
        '{{ \App\Models\Carrera::find($c->carrera_id)->nombre ?? "Desconocida" }}',
      @endforeach
    ];
    const carreraData = [
      @foreach($porCarrera as $c)
        {{ $c->total }},
      @endforeach
    ];

    const carreraChart = new Chart(document.getElementById('carreraChart'), {
      type: 'doughnut',
      data: {
        labels: carreraLabels,
        datasets: [{
          data: carreraData,
          backgroundColor: ['#6a0dad', '#ffc107', '#28a745', '#17a2b8', '#dc3545', '#6610f2']
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: {
            position: 'bottom'
          }
        }
      }
    });

    const estadoLabels = [
      @foreach($topEstados as $estado)
        '{{ $estado->estado ?? "No definido" }}',
      @endforeach
    ];
    const estadoData = [
      @foreach($topEstados as $estado)
        {{ $estado->total }},
      @endforeach
    ];

    const estadoChart = new Chart(document.getElementById('estadoChart'), {
      type: 'bar',
      data: {
        labels: estadoLabels,
        datasets: [{
          label: 'Aspirantes',
          data: estadoData,
          backgroundColor: '#6a0dad'
        }]
      },
      options: {
        indexAxis: 'y',
        responsive: true,
        scales: {
          x: {
            beginAtZero: true
          }
        }
      }
    });
  </script>

</body>
</html>
