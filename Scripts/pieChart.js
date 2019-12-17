// Pie chart

//
//
// POUR CHANGER IMAGE EN FONCTION DE 50% DE ROUGE ETC :
// Se servir simplement des données "consommés" et "jetés" faire un calcul simple de si
// "jetés" est égal ou supérieur à 50% du total de produits et changer l'image en conséquence
//
//

let datas1 = {
    "Consommés": 110,
    "Jetés": 15,
}

let datas2 = {
    "Consommés": 49,
    "Jetés": 19,
}

function drawPieSlice(ctx,centerX, centerY, radius, startAngle, endAngle, color ){
    ctx.fillStyle = color
    ctx.beginPath()
    ctx.moveTo(centerX,centerY)
    ctx.arc(centerX, centerY, radius, startAngle, endAngle)
    ctx.closePath()
    ctx.fill()
}

let Piechart = function(options){
    this.options = options
    this.canvas = options.canvas
    this.ctx = this.canvas.getContext("2d")
    this.colors = options.colors
 
    this.draw = function(){
        let total_value = 0
        let color_index = 0
        for (let categ in this.options.data){
            let val = this.options.data[categ]
            total_value += val
        }
 
        let start_angle = 0
        for (categ in this.options.data){
            val = this.options.data[categ]
            let slice_angle = 2 * Math.PI * val / total_value
 
            drawPieSlice(
                this.ctx,
                this.canvas.width/2,
                this.canvas.height/2,
                Math.min(this.canvas.width/2,this.canvas.height/2),
                start_angle,
                start_angle+slice_angle,
                this.colors[color_index%this.colors.length]
            )
 
            start_angle += slice_angle
            color_index++
        }
 
        //drawing a white circle over the chart
        //to create the doughnut chart
        if (this.options.doughnutHoleSize){
            drawPieSlice(
                this.ctx,
                this.canvas.width/2,
                this.canvas.height/2,
                this.options.doughnutHoleSize * Math.min(this.canvas.width/2,this.canvas.height/2),
                0,
                2 * Math.PI,
                "#F6F5F5"
            )
        }
 
    }
}

let firstDougnutChart = new Piechart(
    {
        canvas:firstCanvas,
        data:datas1,
        colors:["#63C97A","#D85239"],
        doughnutHoleSize:0.55
    }
)
firstDougnutChart.draw()

let secondDougnutChart = new Piechart(
    {
        canvas:secondCanvas,
        data:datas2,
        colors:["#63C97A","#D85239"],
        doughnutHoleSize:0.55
    }
)
secondDougnutChart.draw()

// End Pie chart