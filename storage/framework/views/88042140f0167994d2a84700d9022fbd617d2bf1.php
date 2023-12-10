<div>
    <canvas id="myChart"></canvas>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
  <script>
    const ctx = document.getElementById('myChart');
  
    new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: '# of Votes',
          data: [<?php echo json_encode($lakiorong, 15, 512) ?>, <?php echo json_encode($wanitaorong, 15, 512) ?>],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>
  <?php /**PATH C:\xampp\htdocs\AMAN-Sulsel\resources\views/admin/chart.blade.php ENDPATH**/ ?>