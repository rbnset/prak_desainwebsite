import { Chart } from '../../..';

const chart = new Chart('id', {
  type: 'line',
  data: {
    labels: [],
    datasets: [{
      data: []
    }]
  },
});

const tooltip = chart.tooltip;

const active = tooltip && tooltip.getActiveElements();
