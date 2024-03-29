import { Chart } from '../../..';

const chart = new Chart('id', {
  type: 'bar',
  data: {
    labels: [],
    datasets: [{
      data: []
    }]
  },
  options: {
    plugins: {
      tooltip: {
        callbacks: {
          label: (item) => {
            return `Foo data ${item.parsed.y}`;
          }
        }
      }
    }
  },
});
