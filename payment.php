<!DOCTYPE html>
<html lang="ms">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pembayaran Selamat</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
  </style>
</head>
<body class="bg-gradient-to-br from-blue-50 via-white to-blue-100 min-h-screen flex items-center justify-center px-4 py-10">

  <div class="bg-white rounded-3xl shadow-2xl p-10 w-full max-w-2xl animate-fade-in">
    <div class="text-center mb-8">
      <h1 class="text-4xl font-bold text-blue-800 mb-2">Bayaran Anda</h1>
      <p class="text-gray-500 text-sm">Sila isikan maklumat kad anda untuk meneruskan pembayaran</p>
    </div>

    <!-- Kad Bayaran -->
    <div class="flex justify-center gap-6 mb-8">
      <img src="https://img.icons8.com/color/64/visa.png" alt="Visa" class="h-12 hover:scale-110 transition duration-300">
      <img src="https://img.icons8.com/color/64/mastercard.png" alt="Mastercard" class="h-12 hover:scale-110 transition duration-300">
      <img src="https://img.icons8.com/color/64/bank.png" alt="Interbank" class="h-12 hover:scale-110 transition duration-300">
    </div>

    <!-- Borang -->
    <form class="space-y-6">
      <div>
        <label class="block text-sm font-semibold text-gray-700 mb-1">Nama Pemegang Kad</label>
        <input type="text" placeholder="Contoh: Ahmad Bin Ali" class="w-full px-5 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 shadow-sm transition">
      </div>

      <div>
        <label class="block text-sm font-semibold text-gray-700 mb-1">Nombor Kad</label>
        <input type="text" placeholder="1234 5678 9012 3456" class="w-full px-5 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 shadow-sm transition">
      </div>

      <div class="flex gap-4">
        <div class="w-1/2">
          <label class="block text-sm font-semibold text-gray-700 mb-1">Tarikh Luput</label>
          <input type="text" placeholder="MM/YY" class="w-full px-5 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 shadow-sm transition">
        </div>
        <div class="w-1/2">
          <label class="block text-sm font-semibold text-gray-700 mb-1">CVV</label>
          <input type="password" placeholder="123" class="w-full px-5 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 shadow-sm transition">
        </div>
      </div>

      <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-700 hover:to-blue-600 text-white py-3 text-lg font-semibold rounded-xl shadow-md hover:shadow-lg transition">
        💳 Bayar Sekarang
      </button>
    </form>

    <p class="text-center text-xs text-gray-500 mt-6">🔒 Transaksi anda disulitkan dan dilindungi sepenuhnya.</p>
  </div>

  <!-- Animasi ringkas -->
  <script>
    document.querySelector('body').classList.add('opacity-0');
    window.addEventListener('load', () => {
      document.querySelector('body').classList.remove('opacity-0');
      document.querySelector('body').classList.add('transition', 'duration-500', 'ease-in', 'opacity-100');
    });
  </script>

</body>
</html>
