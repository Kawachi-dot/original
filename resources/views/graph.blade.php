<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>月ごとのグラフ</title>
    <link rel="stylesheet" href="{{asset('css/graph.css')}}">
</head>
<body>
<h1>家計簿管理アプリ</h1>

<!-- Authentication -->
<form method="POST" action="{{ route('logout') }}">
      @csrf
        <x-jet-dropdown-link href="{{ route('logout') }}"
              onclick="event.preventDefault();
              this.closest('form').submit();"
              id='logout'>
               {{ __('ログアウト') }}
        </x-jet-dropdown-link>
</form>

<div id='nav'>
   <ul>
       <li><a href='/money/list'>今月の家計簿</a></li>
       <li><a href='/plan/list'>マイプラン</a></li>
       <li><a href='/graph'>月ごとのグラフ</a></li>
       <li><a href='/account/info'>設定</a></li>
   </ul>    
</div>
<!--
<div id="app">
        <div>
            <span v-text="year"></span>年
            <span v-text="month"></span>月
            <button type="button" @click="moveMonth(-1)">前へ</button>
            <button type="button" @click="moveMonth(1)">次へ</button>
        </div>
        <canvas id="chart"></canvas>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.2/dist/Chart.min.js"></script>
    <script>

        new Vue({
            el: '#app',
            data: {
                year: '',
                month: '',
                chart: null
            },
            methods: {
                drawChart() {

                    const url = '/ajax/login_count?year='+ this.year +'&month='+ this.month;

                    axios.get(url)
                        .then(response => {

                            const data = response.data;
                            const ctx = document.getElementById('chart').getContext('2d');
                            let labels = [];

                            for(let i = 0 ; i < 24 ; i++) {

                                labels.push(i +'時');

                            }

                            if(this.chart) {

                                this.chart.destroy();

                            }

                            this.chart = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: labels,
                                    datasets: [{
                                        label: 'ログイン回数',
                                        data: data
                                    }]
                                },
                                options: {
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                stepSize: 1
                                            }
                                        }]
                                    }
                                }
                            });

                        });

                },
                moveMonth(number) {

                    this.month += number;

                    if(this.month === 0) {

                        this.year--;
                        this.month = 12;

                    } else if(this.month === 13) {

                        this.year++;
                        this.month = 1;

                    }

                    this.drawChart();

                }
            },
            mounted() {

                const date = new Date();
                this.year = date.getFullYear();
                this.month = date.getMonth() + 1;
                this.drawChart();

            }
        });
   </script>  -->
</body>
</html>