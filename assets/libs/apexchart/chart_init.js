const path = window.location.href;
const url_barang = `${path}functions.php?barang`;

const ambilDataBarang = () => {
  return fetch(url_barang)
    .then((response) => response.json())
    .then((data) => data)
    .catch((err) => {
      alert(`Erro ${err}`);
    });
};
const ambilDataTempat = () => {
  return fetch(url_tempat)
    .then((response) => response.json())
    .then((data) => data)
    .catch((err) => {
      alert(`Erro ${err}`);
    });
};

const grafikBarang = async () => {
  const data = await ambilDataBarang();
  let nm_barang = [];
  let jumlah = [];

  data.forEach((element) => {
    nm_barang.push(element.nm_barang);
    jumlah.push(element.total);
  });

  let options = {
    series: [
      {
        name: "Total",
        data: jumlah,
      },
    ],
    chart: {
      height: 350,
      type: "bar",
      events: {
        click: function (chart, w, e) {
          // console.log(chart, w, e)
        },
      },
    },
    plotOptions: {
      bar: {
        columnWidth: "80%",
        distributed: true,
        borderRadius: 10,
        dataLabels: {
          position: "top", // top, center, bottom
        },
      },
    },
    dataLabels: {
      enabled: true,
      offsetY: -20,
      style: {
        fontSize: "12px",
        colors: ["#304758"],
      },
    },
    legend: {
      show: false,
    },
    xaxis: {
      categories: nm_barang,
      labels: {
        style: {
          fontSize: "12px",
        },
      },
    },
  };

  let chart = new ApexCharts(document.querySelector("#chartBarang"), options);

  chart.render();
};

// Chart tempat
const grafikTempat = async () => {
  const data = await ambilDataTempat();
  let nm_barang = [];
  let totBaik = [];
  let totSedang = [];
  let totRusak = [];

  data.forEach((element) => {
    nm_barang.push(element.nm_barang);
    totBaik.push(element.totalBaik);
    totSedang.push(element.totalSedang);
    totRusak.push(element.totalRusak);
  });
  let options = {
    series: [
      {
        name: "Baik",
        data: totBaik,
      },
      {
        name: "Sedang",
        data: totSedang,
      },
      {
        name: "Rusak",
        data: totRusak,
      },
    ],
    chart: {
      type: "bar",
      height: 350,
    },
    plotOptions: {
      bar: {
        horizontal: false,
        columnWidth: "55%",
        endingShape: "rounded",
      },
    },
    dataLabels: {
      enabled: false,
    },
    stroke: {
      show: true,
      width: 2,
      colors: ["transparent"],
    },
    xaxis: {
      categories: nm_barang,
    },
    yaxis: {
      title: {
        text: "Total",
      },
    },
    fill: {
      opacity: 1,
    },
    tooltip: {
      y: {
        formatter: function (val) {
          return val;
        },
      },
    },
  };

  let chart = new ApexCharts(document.querySelector("#chartTempat"), options);
  chart.render();
};

grafikBarang();

// Ketika Tempat dipilih
$("body").on("change", "#tempat_id", function () {
  let tempat_id = $(this).val();
  url_tempat = `${path}functions.php?tempat=${tempat_id}`;
  $("#chartTempat").html("");
  grafikTempat();
});
