<?php include 'includes/header.php'; ?>
    <h2 class="font-bold text-xl">Dashboard</h2>
    <hr class="h-1 bg-gradient-to-r from-blue-600 to-blue-200 mb-4">
    <div class="grid grid-cols-4 gap-4">
        <div class="shadow rounded-2xl p-4 bg-gradient-to-r from-blue-100 to-blue-200">
            <h3 class="font-semibold text-lg">Total Categories</h3>
            <p class="text-3xl mt-2">15</p>
        </div>
        <div class="shadow rounded-2xl p-4 bg-gradient-to-r from-red-100 to-red-200">
            <h3 class="font-semibold text-lg">Total Products</h3>
            <p class="text-3xl mt-2">155</p>
        </div>
        <div class="shadow rounded-2xl p-4 bg-gradient-to-r from-green-100 to-green-200">
            <h3 class="font-semibold text-lg">Total Users</h3>
            <p class="text-3xl mt-2">100</p>
        </div>
        <div class="shadow rounded-2xl p-4 bg-gradient-to-r from-indigo-100 to-indigo-200">
            <h3 class="font-semibold text-lg">Total Orders</h3>
            <p class="text-3xl mt-2">234</p>
        </div>
        <div>
            <canvas id="myChart"></canvas>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
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
<?php include 'includes/footer.php'; ?>