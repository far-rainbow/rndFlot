btnVal = 0;
btnValArr = {'#lowSize': 0.1,'#midSize': 0.5,'#fullSize': 1.0,'#startStop': false};
modSize = 0;
iteration = 0;
query = [];
/**
 * TODO: make array great again linked with php generator. Please no handfull awkward label set!
 * 20.03.2017 -- TODO: DO IT! You lazy pokerface! Do it!111 right now! =)
 * Okey, i shall start tonight! ~~admin from linux console 20/03/2017
 * test message into master branch
 */
total = [ 
{label: 0, data: 0},
{label: 1, data: 0},
{label: 2, data: 0},
{label: 3, data: 0},
{label: 4, data: 0},
{label: 5, data: 0},
{label: 6, data: 0},
{label: 7, data: 0},
{label: 8, data: 0},
{label: 9, data: 0},
{label: 10, data: 0},
{label: 11, data: 0},
{label: 12, data: 0},
{label: 13, data: 0},
{label: 14, data: 0},
{label: 15, data: 0},
{label: 16, data: 0},
];

options = {
		series: {
			bars: {
				show:true
			}
		},
		bars: {
			barWidth: 0.75
		},
		xaxis: {
			mode: "categories"
		},
		yaxis: {
			min: 0,
			max: $('#tableLines').width()
		}
};

pie_options = {
		series: {
			pie: {
				show:true,
				radius: 1,
				label: {
					show: true,
					radius: 3/4,
					background: { 
						opacity: 0.5,
						color: '#000'
					},
					formatter: function (label, series) {                
                return '<div style="border:1px solid grey;font-size:8pt;text-align:center;padding:5px;color:white;">' +
                label + ' : ' +
                Math.round(series.percent) + '% : ' +
				total[label].data +
                '</div>';
            },

				}
			}
		}
};

$('#btn1 .dropdown-menu li a').click(function(){
	modSize = btnValArr[$(this).attr('href')];
});

$('#btn2 .dropdown-menu li a').click(function(){
	query.shift();
	switch ($(this).attr('href')) {
		case '#yandex':
			setTimeout(function() { window.location.href = 'https://yandex.ru/search/?lr=382&text='+query.join('%20'); }, 1000);
			break;
		case '#google':
			setTimeout(function() { window.location.href = 'https://google.com/search?q='+query.join('%20'); }, 1000);
			break;
		case '#kamenka':
			setTimeout(function() { window.location.href = 'http://02511.kamenka.su/node-js-top-stat'; }, 1000);
			break;
	}
});

(function anim() {
var d = [];
var testF;
options.yaxis.max = $('#tableLines').width();

	if (modSize) {
		iteration++;
		for (i=1;i<=8;i++)
		{
			rndWidth = Math.round(Math.random()*$('#pbar_'+i).parent().width() * modSize);
			query[i] = rndWidth;
			d.push( {	label: i,
						data: [
								[i,rndWidth]
						]
					}
			);
			total[i].data += rndWidth;
			$('#pbar_'+i).width(rndWidth);
			$('#pbar_'+i).text(rndWidth);
		}
		$.plot('#flot-line-chart-multi', d, options );
		$.plot('#flot-pie', total , pie_options );
}

$('#iteration').text('Итерация №'+iteration);
$('#testOutput').text('Отладка: '+testF);
setTimeout (anim, 1000);
})();
