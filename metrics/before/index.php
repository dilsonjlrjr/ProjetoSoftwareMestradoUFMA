<html>
<head>
    <title>PhpMetrics report v1.10.0 - by Jean-François Lépine</title>
    <meta charset="utf-8">
    <link href="data:image/x-icon;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFA+LP9QPiz/UD4s/1A+LP9QPiz/UD4s/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAUD4s/1A+LP9QPiz/UD4s/1A+LP9QPiz/UD4s/1A+LP9QPiz/UD4s/wAAAAAAAAAAAAAAAAAAAAAAAAAAUD4s/1A+LP9QPiz/UD4s/1A+LP9QPiz/UD4s/wC6eP8sdU7/ALp4/1A+LP9QPiz/AAAAAAAAAAAAAAAAUD4s/1A+LP9QPiz/UD4s/1A+LP9QPiz/UD4s/wC6eP9QPiz/SUgy/wC6eP9LRTD/ALp4/1A+LP8AAAAAAAAAAFA+LP9QPiz/UD4s/1A+LP9QPiz/UD4s/wC6eP89Wz3/ALp4/wCz9P8As/T/UD4s/wC6eP9QPiz/AAAAAFA+LP9QPiz/UD4s/1A+LP9QPiz/TkAt/1A+LP8Aunj/OGJC/wCz9P8As/T/ALP0/xSbZf9QPiz/UD4s/1A+LP9QPiz/UD4s/1A+LP9QPiz/ALp4/1A+LP8Aunj/ALp4/wui2P9QPiz/Cabd/wevcf8Aunj/UD4s/1A+LP9QPiz/UD4s/1A+LP9QPiz/TUMv/wC6eP8Aunj/ALp4/wC6eP8Aunj/ALp4/wynbP9QPiz/K3dP/zZmRP9QPiz/UD4s/1A+LP9QPiz/ALp4/wC6eP8Aunj/TEQw/xqSX/8As/T/SEoz/wC6eP8BuHf/ALP0/wC6eP8Aunj/C6ht/1A+LP9QPiz/OWFC/wC6eP8Aunj/ALp4/01BLv8qdYv/UD4s/wCz9P9QPiz/ALp4/1A+LP8Aunj/ALp4/wC6eP9QPiz/UD4s/1A+LP8As/T/ALP0/1A+LP8As/T/ALP0/wC6eP8Aunj/UD4s/wC6eP8za0f/UD4s/xeVYv8Kqm7/UD4s/wAAAABQPiz/ALP0/wCz9P8Aunj/ALP0/zdhaf9QPiz/UD4s/wC6eP9QPiz/ALp4/wC6eP8Aunj/UD4s/wAAAAAAAAAAUD4s5FA+LP9QPiz/UD4s/wCz9P8As/T/UD4s/wC6eP8Snmf/UD4s/1A+LP9QPiz/UD4s/1A+LP8AAAAAAAAAAAAAAABQPiz/UD4s/1A+LP8As/T/ALP0/1A+LP8Aunj/UD4s/1A+LP9QPiz/UD4s/1A+LP8AAAAAAAAAAAAAAAAAAAAAAAAAADwvIZJQPiz/UD4s/1A+LP9QPiz/UD4s/1A+LP9QPiz/UD4s/1A+LNMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAEY2J1ZQPiz/UD4s/1A+LP9QPiz/RjYnpQAAAAAAAAAAAAAAAAAAAAAAAAAA+B8AAOAHAADAAwAAgAEAAIABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACAAQAAgAEAAMADAADgBwAA/B8AAA==" rel="icon" type="image/x-icon" />    <style type="text/css">
                        /* ---- layout ---- */
body {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    margin: 0;
    padding: 0;
    font-size: 1em;
    text-align: center;
    margin-bottom: 2.5em;
}
.container {
    width: 1170px;
    text-align: left;
    margin: 0 auto;
}
.row {
    position: relative;
    clear: left;
}
.col-3 {
    float:left;
    width:28%;
    margin-right:2%;
}
.col-3:last-child {
    margin-right: 0;
}
.col-3:last-child:after {
    content:" ";
    clear:left;
}

.col-6 {
    float:left;
    width:48%;
    margin-right:2%;
}
.col-3:last-child {
    margin-right: 0;
}
.col-3:last-child:after {
    content:" ";
    clear:left;
}

.accessibility-box {
    float:right;
    width: 200px;
}

.menu, .menu li {
    list-style: none;
    margin: 0;
    padding: 0;
}
.menu li {
    display: inline-block;
    padding: 10px 15px;
}
.menu li.active {
    background-color: #428bca;
    border-radius: 4px;
}
.menu li.active a {
    color: #fff;
}
.footer {
    position: fixed;
    bottom: 0;
    left:0;
    text-align: center;
    font-size: 0.9em;
    background: #FFF;
    height: 2.5em;
    width: 100%;
}
.footer .container {
    text-align: center;
}


/* ---- tabs ---- */
.tab-pane {
    display:none;
}
.tab-pane.active {
    display:block;
}


/* ----- fonts ----- */
a:hover, a:focus {
    color: #2a6496;
    text-decoration: underline;
}
a:active, a:hover {
    outline: 0;
}
a {
    color: #428bca;
    text-decoration: none;
    cursor: pointer;
}
h1, h2, h3, h4, h5, h6 {
    font-family: inherit;
    font-weight: 500;
    line-height: 1.1;
    color: inherit;
}
h4 {
    font-weight: bold;
}
.more {
    color: #666;
    font-size: 0.9em;
}


/* ---- general styles ----- */
.validate-critical, .critical {
    background-color:#B01E00 !important;
    color:#FFF;
}
.validate-warning, .warning {
    background-color:#f4b300 !important;
    color:#333;
}
.validate-good, .good {
    background-color:#78ba00 !important;
    color:#FFF;
}
.validate-unknown, .unknown {
}

/* ---- tables ---- */
table {
    border-spacing: 0;
    border-collapse: collapse;
}
.table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 20px;
    font-size:0.8em;
}
.table-bordered {
    border: 1px solid #ddd;
}
.table thead {
    font-weight:normal;
}
.table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td {
    padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #ddd;
}
.table-striped>tbody>tr:nth-child(odd)>td, .table-striped>tbody>tr:nth-child(odd)>th {
    background-color: #f9f9f9;
}
.mytable td {
    width:4%;
    text-align:center;
}
.mytable .sep {
    border-left:1px solid #CCC;
}

.well {
    min-height: 20px;
    padding: 19px;
    margin-bottom: 20px;
    background-color: #f5f5f5;
    border: 1px solid #e3e3e3;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
}


/* ---- form ---- */
.form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}

/* ---- Charts ---- */
#chart-tableview .critical,
#chart-tableview .warning,
#chart-tableview .good,
#chart-tableview .unknown {
    display:block;
    text-align: center;
}

#svg-custom,
#svg-maintainability,
#svg-abstractness {
    width:300px;
    height:300px;
}
.svg-main {
    margin: 0 auto;
    width:960px;;
    height:960px;;
}


/* ---- maintainability ---- */
#svg-maintainability svg circle:hover {
    fill:steelblue !important;
}

/* ---- relations ---- */
.node {
    font: 300 11px "Helvetica Neue", Helvetica, Arial, sans-serif;
    fill: #bbb;
}
.node:hover {
    fill: #000;
}
.link {
    stroke: steelblue;
    stroke-opacity: .4;
    fill: none;
    pointer-events: none;
}
.node:hover,
.node--source,
.node--target {
    font-weight: 700;
}
.node--source {
    fill: #AE113D;
}
.node--target {
    fill: #4617B4;
}
.link--source,
.link--target {
    stroke-opacity: 1;
    stroke-width: 2px;
}
.link--source {
    stroke: #AE113D;
}
.link--target {
    stroke: #4617B4;
}
.relation-source {
    background-color: #AE113D;
}
.relation-target {
    background-color: #4617B4;
}


/* ---- tooltip ---- */
.tooltip {
    position: absolute;
    background: #333;
    border-radius: 5px;
    padding: 5px 15px;
    box-shadow: 1px 1px 3px;
    text-align: left;
    color:#FFF;
    z-index: 4;
}

/* ---- zoom ---- */
.zoomed {
    position: fixed;
    z-index: 2;
    top: 20px;
    left: 0;
    width: 100% !important;
    height: 95% !important;
    background: #FFF;
}
.btn-close {
    position: fixed;
    z-index: 3;
    top: 0;
    background: #333;
    width: 100%;
    text-align: center;
    margin: 0 auto;
    padding: 3px 0;
    height: 20px;
    lien-height: 20px;
}
.btn-close a {
    color: #FFF;
}
    </style>
                <link rel="stylesheet" type="text/css" href="http://nvd3.org/assets/css/nv.d3.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/alangrafu/radar-chart-d3/master/src/radar-chart.min.css">
    </head>

<body>

<div class="container">



    <h1 id="title">PhpMetrics report</h1>

    <div class="row">
        <div class="well accessibility-box">
            <label>
                <input type="checkbox" onclick="toggleAccessibility()"> I'm colorblind
            </label>
        </div>

        <div class="menu-box">
            <ul id="menu" class="menu" >
                <li id="link-overview" class="active"><a >Overview</a></li>
                <li id="link-score"><a >Evaluation</a></li>
                <li id="link-relations"><a  >Relations map</a></li>
                <li id="link-repartition"><a  >Repartition</a></li>
                <li id="link-explore"><a >Explore</a></li>
                
                <li id="link-help"><a  >Help</a></li>
            </ul>
        </div>


    </div>


    <div class="tab-content row">


        <!-- General details -->
        <div class="row tab active" id="overview">
            <div class="col-3">
                <h3>Evaluation</h3>
                <small><a id="btn-save-maintainability" download="phpmetric-maintainability.svg">Download (as SVG)</a> | <a onclick="return zoom('svg-maintainability', updateMaintainabilityChart);">zoom</a></small>
                <div id="svg-maintainability"><svg /></div>

                <div class="well ">

                    <h4>Information</h4>
                    <p>
                        Each file is symbolized by a circle.
                        Size of the circle represents the Cyclomatic complexity.
                        Color of the circle represents the Maintainability Index.
                    </p>
                    <p>Large red circles will be probably hard to maintain.</p>
                </div>

            </div>
            <div class=" col-3">

                <h3 id="title-custom">Custom chart</h3>
                <small><a id="btn-save-custom" download="phpmetric-custom.svg">Download (as SVG)</a> | <a onclick="return zoom('svg-custom', updateCustomChart);">zoom</a></small>
                <div id="svg-custom"><svg /></div>

                <div class="well">
                    <h4>Configuration</h4>
                    <p>
                        Select metrics you want to display in chart.
                    </p>
                    <table class="table table-condensed table-bordered">
                        <tr>
                            <td>X Axis</td>
                            <td>Y Axis</td>
                            <td>Diameter</td>
                        </tr>
                        <tr>
                            <td>
                                <select id="xAxis" class="form-control" onchange="xAxis = this.value; updateCustomChart();">
                                                                            <option value="afferentCoupling">Afferent Coupling </option>
                                                                            <option value="bugs">Bugs </option>
                                                                            <option value="commentWeight">Comment Weight </option>
                                                                            <option value="cyclomaticComplexity">Cyclomatic Complexity </option>
                                                                            <option value="dc">Dc </option>
                                                                            <option value="difficulty">Difficulty </option>
                                                                            <option value="efferentCoupling">Efferent Coupling </option>
                                                                            <option value="effort">Effort </option>
                                                                            <option value="filename">Filename </option>
                                                                            <option value="instability">Instability </option>
                                                                            <option value="intelligentContent">Intelligent Content </option>
                                                                            <option value="lcom">Lcom </option>
                                                                            <option value="length">Length </option>
                                                                            <option value="loc">Loc </option>
                                                                            <option value="logicalLoc">Logical Loc </option>
                                                                            <option value="maintainabilityIndex">Maintainability Index </option>
                                                                            <option value="maintainabilityIndexWithoutComment">Maintainability Index Without Comment </option>
                                                                            <option value="myerDistance">Myer Distance </option>
                                                                            <option value="myerInterval">Myer Interval </option>
                                                                            <option value="name">Name </option>
                                                                            <option value="noc">Noc </option>
                                                                            <option value="noc-anon">Noc-anon </option>
                                                                            <option value="noca">Noca </option>
                                                                            <option value="nocc">Nocc </option>
                                                                            <option value="noi">Noi </option>
                                                                            <option value="nom">Nom </option>
                                                                            <option value="operators">Operators </option>
                                                                            <option value="rdc">Rdc </option>
                                                                            <option value="rsc">Rsc </option>
                                                                            <option value="rsysc">Rsysc </option>
                                                                            <option value="sc">Sc </option>
                                                                            <option value="sysc">Sysc </option>
                                                                            <option value="time">Time </option>
                                                                            <option value="vocabulary">Vocabulary </option>
                                                                            <option value="volume">Volume </option>
                                                                    </select>
                            </td>
                            <td>
                                <select id="yAxis" class="form-control" onchange="yAxis = this.value; updateCustomChart();">
                                                                            <option value="afferentCoupling">Afferent Coupling </option>
                                                                            <option value="bugs">Bugs </option>
                                                                            <option value="commentWeight">Comment Weight </option>
                                                                            <option value="cyclomaticComplexity">Cyclomatic Complexity </option>
                                                                            <option value="dc">Dc </option>
                                                                            <option value="difficulty">Difficulty </option>
                                                                            <option value="efferentCoupling">Efferent Coupling </option>
                                                                            <option value="effort">Effort </option>
                                                                            <option value="filename">Filename </option>
                                                                            <option value="instability">Instability </option>
                                                                            <option value="intelligentContent">Intelligent Content </option>
                                                                            <option value="lcom">Lcom </option>
                                                                            <option value="length">Length </option>
                                                                            <option value="loc">Loc </option>
                                                                            <option value="logicalLoc">Logical Loc </option>
                                                                            <option value="maintainabilityIndex">Maintainability Index </option>
                                                                            <option value="maintainabilityIndexWithoutComment">Maintainability Index Without Comment </option>
                                                                            <option value="myerDistance">Myer Distance </option>
                                                                            <option value="myerInterval">Myer Interval </option>
                                                                            <option value="name">Name </option>
                                                                            <option value="noc">Noc </option>
                                                                            <option value="noc-anon">Noc-anon </option>
                                                                            <option value="noca">Noca </option>
                                                                            <option value="nocc">Nocc </option>
                                                                            <option value="noi">Noi </option>
                                                                            <option value="nom">Nom </option>
                                                                            <option value="operators">Operators </option>
                                                                            <option value="rdc">Rdc </option>
                                                                            <option value="rsc">Rsc </option>
                                                                            <option value="rsysc">Rsysc </option>
                                                                            <option value="sc">Sc </option>
                                                                            <option value="sysc">Sysc </option>
                                                                            <option value="time">Time </option>
                                                                            <option value="vocabulary">Vocabulary </option>
                                                                            <option value="volume">Volume </option>
                                                                    </select>
                            </td>
                            <td>
                                <select id="rAxis" class="form-control" onchange="rAxis = this.value; updateCustomChart();">
                                                                            <option value="afferentCoupling">Afferent Coupling </option>
                                                                            <option value="bugs">Bugs </option>
                                                                            <option value="commentWeight">Comment Weight </option>
                                                                            <option value="cyclomaticComplexity">Cyclomatic Complexity </option>
                                                                            <option value="dc">Dc </option>
                                                                            <option value="difficulty">Difficulty </option>
                                                                            <option value="efferentCoupling">Efferent Coupling </option>
                                                                            <option value="effort">Effort </option>
                                                                            <option value="filename">Filename </option>
                                                                            <option value="instability">Instability </option>
                                                                            <option value="intelligentContent">Intelligent Content </option>
                                                                            <option value="lcom">Lcom </option>
                                                                            <option value="length">Length </option>
                                                                            <option value="loc">Loc </option>
                                                                            <option value="logicalLoc">Logical Loc </option>
                                                                            <option value="maintainabilityIndex">Maintainability Index </option>
                                                                            <option value="maintainabilityIndexWithoutComment">Maintainability Index Without Comment </option>
                                                                            <option value="myerDistance">Myer Distance </option>
                                                                            <option value="myerInterval">Myer Interval </option>
                                                                            <option value="name">Name </option>
                                                                            <option value="noc">Noc </option>
                                                                            <option value="noc-anon">Noc-anon </option>
                                                                            <option value="noca">Noca </option>
                                                                            <option value="nocc">Nocc </option>
                                                                            <option value="noi">Noi </option>
                                                                            <option value="nom">Nom </option>
                                                                            <option value="operators">Operators </option>
                                                                            <option value="rdc">Rdc </option>
                                                                            <option value="rsc">Rsc </option>
                                                                            <option value="rsysc">Rsysc </option>
                                                                            <option value="sc">Sc </option>
                                                                            <option value="sysc">Sysc </option>
                                                                            <option value="time">Time </option>
                                                                            <option value="vocabulary">Vocabulary </option>
                                                                            <option value="volume">Volume </option>
                                                                    </select>
                            </td>
                        </tr>
                    </table>
                </div>

            </div>
            <div class="col-3">
                <h3>Abstractness / Instability</h3>
                <small><a id="btn-save-abstractness" download="phpmetric-abstractness.svg">Download (as SVG)</a> | <a onclick="return zoom('svg-abstractness', updateAbstractnessChart);">zoom</a></small>
                <div id="svg-abstractness"><svg /></div>
            </div>
        </div>
        <!-- end: General details -->

        <!-- Score -->
        <div class="tab" id="score">
            <div class="col-sm-12">
                <h3>Score</h3>

                <div class="col-6">
                    <div id="chart-score"></div>
                </div>

                <div class="col-6">
                    <p>
                        This score is not absolute. This chart is a comparison of your project relative to a representative average of recent PHP projects.
                    </p>
                    <p>
                        Each score is calculated from <acronym title="Cyclomatic complexity, Halstead metrics, Maintainability Index, Comment weight, Difficulty, Logical lines of code...">various criterias</acronym> from 31 files in your projects.
                        Your score is a note between 0 (poor) and 100 (excellent).
                    </p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Factor</th>
                                <th>Score</th>
                            </tr>
                        </thead>
                        <tbody>
                                                    <tr>
                                <td>Maintainability</td>
                                <td>88.31 / 100</td>
                            </tr>
                                                    <tr>
                                <td>Accessibility for new developers</td>
                                <td>79.33 / 100</td>
                            </tr>
                                                    <tr>
                                <td>Simplicity of algorithms</td>
                                <td>93.57 / 100</td>
                            </tr>
                                                    <tr>
                                <td>Volume</td>
                                <td>91.12 / 100</td>
                            </tr>
                                                    <tr>
                                <td>Reducing bug&#039;s probability</td>
                                <td>90.16 / 100</td>
                            </tr>
                                                </tbody>
                    </table>
                    <p>
                        <strong>This score does not replace the judgement of a human.</strong>
                    </p>
                </div>
            </div>
        </div>
        <!-- end: Score -->

        <!-- Relations -->
        <div class="tab" id="relations">
            <h3>Relations</h3>
            <div class="col-sm-12">
                <div class="well">
                    <p>
                        Class uses another when it calls, constructs, types hint, extends or implements it.
                    </p>
                    <ul>
                        <li><span class="badge relation-source">Used by</span> : this class is used by hovered element.</li>
                        <li><span class="badge relation-target">Uses</span> : this class uses hovered element.</li>
                    </ul>

                </div>
                <small><a id="btn-save-relations" download="phpmetric-relations.svg">Download (as SVG)</a></small>
                <div class="svg-main" id="svg-relations"><svg /></div>

            </div>
        </div>
        <!-- end: Relations -->


        <!-- Tabular datas -->
        <div class="tab" id="explore">
            <div class="col-sm-12">
                <h3>Explore</h3>
                <p>
                    <select id="select-display-tabular">
                        <option value="all" selected="selected">Display metrics</option>
                        <option value="essential">Essential</option>
                        <option value="all">All</option>
                    </select>
                </p>
                <div id="chart-tableview"></div>
            </div>
        </div>
        <!-- end: Tabular datas -->


        <!-- Volume -->
        <div class="tab" id="repartition">
            <h3>Repartition</h3>
            <div class="col-3">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td>Files</td>
                            <td>31</td>
                        </tr>
                        <tr>
                            <td>Lines of code</td>
                            <td>
                                1910
                                                                    <span class="more">(73 by class,
                                        20 by method)</span>
                                                            </td>
                        </tr>
                        <tr>
                            <td>Logical lines of code</td>
                            <td>
                                383
                                                                    <span class="more">(15 by class,
                                        4 by method)</span>
                                                            </td>
                        </tr>
                        <tr>
                            <td>Classes</td>
                            <td>26
                                                                    <div>
                                        <span class="more">
                                            2 interfaces (8 %)
                                        </span>
                                    </div>
                                    <div>
                                        <span class="more">
                                            23 concrete classes (88 %)
                                        </span>
                                    </div>
                                    <div>
                                        <span class="more">
                                            3 abstract classes (12 %)
                                        </span>
                                    </div>
                                    <div>
                                        <span class="more">
                                            0 anonymous classes (0 %)
                                        </span>
                                    </div>
                                                            </td>
                        </tr>

                        <tr>
                            <td>Methods</td>
                            <td>
                                97
                                                                    <span class="more">(3.7 by class )</span>
                                                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-3">
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <td>Relative system complexity</td>
                        <td>4.7</td>
                    </tr>
                    <tr>
                        <td>Relative data complexity</td>
                        <td>0.77</td>
                    </tr>
                    <tr>
                        <td>Relative structure complexity</td>
                        <td>3.93</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-3">
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <td>Lack of cohesion of methods</td>
                        <td>1.06</td>
                    </tr>
                    <tr>
                        <td>Efferent Coupling</td>
                        <td>2.35</td>
                    </tr>
                    <tr>
                        <td>Afferent Coupling</td>
                        <td>0.48</td>
                    </tr>
                    <tr>
                        <td>Abstractness</td>
                        <td>0.12</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- end: Volume -->

        <!-- Help -->
        <div class="tab" id="help">
            <div class="col-sm-12">
                <h3>Help</h3>
                <ul>
                    <li>You're using PhpMetrics v1.10.0</li>
                    <li>Online help is available on the <a href="http://www.phpmetrics.org/documentation/index.html">PhpMetrics website</a>.</li>
                    <li>Sources of PhpMetrics are available on <a href="https://github.com/PhpMetrics/PhpMetrics">Github</a>.</li>
                    <li>PhpMetrics is created by <a href="http://lepine.pro">Jean-François Lépine</a>.</li>
                </ul>
            </div>
        </div>
        <!-- end: Help -->

        <!-- Extensions blocks -->
        
        <!-- end: Extensions -->

    </div>


    <div class="row footer">
        <div class="container">
            Powered by <a href="http://www.phpmetrics.org">PhpMetrics</a> v1.10.0 - Copyright Jean-François Lépine
            <br/> Generated on 5th of December 2016 at 01:48:07 PM
        </div>
    </div>

</div>







<script type="text/javascript">


    function validate() {
        return 'unknown';
    }


    function validate(key, value) {
        var rule = ruleSet[key];

        if(typeof(rule) === 'undefined' || rule === undefined) {
            return 'unknown';
        }

        // according order
        if(rule[0] < rule[2]) {
            // critical < warn < good
            switch(true) {
                case value < rule[1]:
                    return 'critical';
                case value >= rule[1] && value < rule[2]:
                    return 'warning';
                default:
                    return 'good';
            }
        } else {
            // critical > warn > good
            switch(true) {
                case value > rule[1]:
                    return 'critical';
                case value < rule[2]:
                    return 'good';
                default:
                    return 'warning';
            }
        }
    }

    function validateIn(results, key, type) {
        type = type || 'average';
        var value = results[type] ? results[type][key] : results[key];
        return validate(key, value);
    }


    function textify(string) {
        string = string.charAt(0).toUpperCase() + string.slice(1);
        return string.replace(/([a-z0-9])([A-Z])/, "$1 $2");
    }

    function toggleAccessibility() {
        accessibilityEnabled = !!!accessibilityEnabled;
        document.getElementById('svg-maintainability').firstElementChild.innerHTML = '';
        updateMaintainabilityChart();

    }


    function displayTab(e, id) {

        var i, tabs = document.getElementsByClassName('tab');
        for(i = 0; i < tabs.length; i++) {
            tabs[i].style.display = 'none';
        }
        document.getElementById(id).style.display = 'block';

        var child, menu = document.getElementById('menu');
        var nodes = menu.childNodes;
        for(var i = 0; i < nodes.length; i++) {
            nodes[i].className = '';
        }

        e.className = 'active';
    }

    function zoom(id, callback) {
        var e = document.getElementById(id);

        // preserve olds values
        e.setAttribute('data-original-width', e.offsetWidth);
        e.setAttribute('data-original-height', e.offsetHeight);

        // zoom
        e.className = 'zoomed';

        // add close button
        var close = document.createElement('div');
        close.setAttribute('id', 'btn-close');
        close.innerHTML = '<a>Close</a>';
        document.body.appendChild(close);
        close.className = 'btn-close'
        close.onclick = function(id, callback) {
            return function() {
                zoomOut(id, callback);
            }
        }(id, callback);

        // apply callback
        callback();
    }

    function zoomOut(id, callback) {
        var e = document.getElementById(id);

        // zoom
        e.className = '';

        // remove close button
        var close = document.getElementById('btn-close');
        close.parentNode.removeChild(close);

        // apply callback
        var w = e.getAttribute('data-original-width');
        callback(w);
    }

</script>
    <script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
    <script src="http://nvd3.org/assets/js/nv.d3.js" charset="utf-8"></script>
    <script src="https://cdn.rawgit.com/alangrafu/radar-chart-d3/master/src/radar-chart.min.js" charset="utf-8"></script>
<script type="text/javascript">

    function updateScoreChart() {
        if(updateScoreChart.initiazed) return;
        updateScoreChart.initiazed = true;
        var score = [
            {
                className: 'score',
                axes: [
                                            {axis: "Maintainability", value: 88 },
                                            {axis: "Accessibility for new developers", value: 79 },
                                            {axis: "Simplicity of algorithms", value: 94 },
                                            {axis: "Volume", value: 91 },
                                            {axis: "Reducing bug's probability", value: 90 },
                                    ]
            }
        ];

        var chart = RadarChart.chart();
        chart.config({
            maxValue: 100,
            w: 500,
            h: 500
        });
        var svg = d3.select('#chart-score').append('svg');

        // darw one
        svg.append('g').classed('focus', 1).datum(score).call(chart);
        svg.attr('width', 500).attr('height', 500);
    }
</script>
<script type="text/javascript">

    var tabularCurrentView = 'all';

    function updateTableView() {

        document.getElementById('chart-tableview').innerHTML = '';

        /**
         * Get column header
         *
         * @param label
         * @param key
         * @param type [average|sum|min|max]
         * @returns object
         */
        function getCol(label, key, type, help, doValidate) {
            type = type || false;
            if(doValidate == undefined) {
                doValidate = true;
            }
            return {
                format: function(d) {
                    if(type) {
                        return d[type] ? d[type][key] : d[key];
                    }
                    return d[key];
                },
                label: '<abbr title="' + help + '">' + label + '</abbr>',
                type: type,
                classes:
                        ( doValidate
                            ? function(d) { return validateIn(d,key, type); }
                            : ''
                        )
            };
        }

        /**
         * Get all columns
         *
         * @returns {*[]}
         */
        function getAllColumns() {
            return [
                getCol('loc'            , 'loc'                     , 'sum'     , 'Number of lines of code'                 , false),
                getCol('lloc'           , 'logicalLoc'              , 'sum'     , 'Number of logical lines of code'         ,false),
                getCol('CommW'          , 'commentWeight'           , 'average' , 'Comment Weight'),
                getCol('Length'         , 'length'                  , 'sum'     , 'Halstead length'),
                getCol('Volume'         , 'volume'                  , 'average' , 'Halstead Volume'),
                getCol('Vocabulary'     , 'vocabulary'              , 'average' , 'Halstead Vocabulary'),
                getCol('Eff.'           , 'effort'                  , 'average' , 'Halstead effort'),
                getCol('MI'             , 'maintainabilityIndex'     , 'average' , 'Maintainability Index (mi < 65: low ; 65 < mi < 85: correct; 85 < mi: good)'),
                getCol('MIwC'           , 'maintainabilityIndexWithoutComment' , 'average', 'Maintainability index without comments'),
                getCol('Diff'           , 'difficulty'              , 'average' , 'Halstead difficulty (average)'),
                getCol('Bugs'           , 'bugs'                    , 'average' , 'Estimated number of bugs (average by file)'),
                getCol('IC'             , 'intelligentContent'      , 'average' , 'Intelligent content'),
                getCol('CC'             , 'cyclomaticComplexity'    , 'average' , "Cyclomatic complexity"),
                getCol('Dist.'          , 'myerDistance'            , 'average' , "Myer's distance"),
                getCol('Oper.'          , 'operators'               , 'sum'     , 'Number of operators'                 , false),
                getCol('lcom'           , 'lcom'                    , 'average' , 'Lack of cohesion of methods (LCOM4)'),
                getCol('rsysc'          , 'rsysc'                   , 'average' , 'Relative System complexity'),
                getCol('rdc'            , 'rdc'                     , 'average' , 'Relative Data complexity'),
                getCol('rsc'            , 'rsc'                     , 'average' , 'Relative Structural complexity'),
                getCol('Abstr.'         , 'abstractness'            , false     , 'Abstractness'),
                getCol('Inst.'          , 'instability'             , false     , 'Instability'),
                getCol('EC'             , 'efferentCoupling'        , 'average' , 'Efferent coupling'),
                getCol('AC'             , 'afferentCoupling'        , 'average' , 'Afferent coupling'),
                getCol('noc'            , 'noc'                     , 'sum'     , 'Number of classes'                   , false),
                getCol('noca'           , 'noca'                    , 'sum'     , 'Number of abstract classes and interfaces'          , false),
                getCol('nocc'           , 'nocc'                    , 'sum'     , 'Number of concrete classes'          , false),
                getCol('noi'            , 'noi'                     , 'sum'     , 'Number of interfaces'                , false)
            ];
        }

        /**
         * Get essentials columns
         *
         * @returns {*[]}
         */
        function getEssentialColumns() {
            return [
                getCol('Lines of code'            , 'loc'                     , 'sum'     , 'Number of lines of code'                 , false),
                getCol('Logical lines of code'           , 'logicalLoc'              , 'sum'     , 'Number of logical lines of code'         ,false),
                getCol('Comment weight'          , 'commentWeight'           , 'average' , 'Comment Weight'),
                getCol('Maintainability index'             , 'maintainabilityIndex'     , 'average' , 'Maintainability Index (mi < 65: low ; 65 < mi < 85: correct; 85 < mi: good)'),
                getCol('Bugs'           , 'bugs'                    , 'average' , 'Estimated number of bugs (average by file)'),
                getCol('Lack of cohesion of methods'           , 'lcom'                    , 'average' , 'Lack of cohesion of methods (LCOM4)'),
            ];
        }

        /**
         * Get only active columns
         *
         * @returns {*[]}
         */
        function getActiveColumns() {
            switch(tabularCurrentView) {
                case 'essential':
                    return getEssentialColumns();
                case 'all':
                default:
                    return getAllColumns();
            }
        }

        nv.addGraph(function() {
            var columns = getActiveColumns();
            columns.unshift({
                key: 'name',
                label: 'Name',
                showCount: true,
                type: 'text',
                classes: function(d) {
                    return  'name '
                            + (d.childs ? 'clickable ' : '')
                            + 'depth-' + d._depth;
                }
            });
            var chart = nv.models.indentedTree()
                    .tableClass('table table-striped') //for bootstrap styling
                    .columns(columns);

            d3.select('#chart-tableview')
                    .datum(tabularize(JSON.parse(JSON.stringify(groupedData))))
                    .call(chart);

            // fix bug with nvd3js and html in labels
            d3.select('#chart-tableview').selectAll('th').each(function() {
                this.innerHTML = this.innerText;
            });



            return chart;
        });

        // select type of display
        var d = document.getElementById('select-display-tabular');
        d.onchange = function(){
            tabularCurrentView = this.options[this.selectedIndex].value;
            updateTableView();
        }

    }

    function tabularize(root) {
        var result = root;

        var i, len = root.length;

        for(i = 0; i < len; i++) {
            result[i]._values = root[i].childs;
            delete result[i].childs;
            result[i]._depth = result[i].depth;
        }

        // we want to display results in a tree
        var parents = [
            { name: "temporary", _values: []}
        ];
        var final, e, level, separator;
        separator = "/";
        for(i = 0; i < len; i++) {
            if (result[i].name.indexOf("\\") !== -1) {
                separator = "\\";
                break;
            }
        }
        for(i = 0; i < len; i++) {
            e = result[i];
            level = (e.name.split(separator).length - 1);
            if(!e.name.match(/\.php$/)) {
                parents[level + 1] = e;
                parents[level]._values.push(e);
            } else {
                parents[level]._values.push(e);
            }
        }
        final = parents[1];
        return [final];
    }



</script>
<script type="text/javascript">

    function updateMaintainabilityChart() {
        chartMaintainability();
    };

    function chartMaintainability() {
        var maxHeight = document.getElementById('svg-maintainability').offsetHeight,
            maxWidth = document.getElementById('svg-maintainability').offsetWidth,
            format = d3.format(",d"),
            color = d3.scale.category20c();

        var bubble = d3.layout.pack()
            .sort(null)
            .size([maxWidth, maxHeight])
            .padding(1.5);

        var r = d3.scale.linear().range([1, maxWidth / 4]).domain([1, 100]);
        var x = d3.scale.linear().range([1, maxWidth]);
        var y = d3.scale.linear().range([1, maxHeight]);



        d3.select("#svg-maintainability").html("<svg></svg>");
        var svg = d3.select("#svg-maintainability").select("svg")
            .attr("width", maxWidth)
            .attr("height", maxHeight)
            .attr("class", "bubble");


        // accessibility for colorblind
        var defs= svg.append('defs');
        defs.append('pattern')
                    .attr('id', 'hash-warning')
                    .attr('patternUnits', 'userSpaceOnUse')
                    .attr('width', 4)
                    .attr('height', 4)
                    .append('path')
                        .attr('d', 'M-1,1 l2,-2 M0,4 l4,-4 M3,5 l2,-2')
                        .attr('stroke', '#000000')
                        .attr('stroke-width', 1);
        defs.append('pattern')
                    .attr('id', 'hash-critical')
                    .attr('patternUnits', 'userSpaceOnUse')
                    .attr('width', 4)
                    .attr('height', 4)
                    .append('path')
                        .attr('d', 'M-1,1 l2,-2 M0,4 l4,-4 M3,5 l2,-2')
                        .attr('stroke', '#000000')
                        .attr('stroke-width', 3);
        defs.append('pattern')
                .attr('id', 'hash-good')
                .attr('patternUnits', 'userSpaceOnUse')
                .attr('width', 5)
                .attr('height', 5)
                .append('circle')
                    .attr('cx', 2)
                    .attr('cy', 2)
                    .attr('r', 2)
                    .attr('style', "stroke:none;fill:#eee");

        // initialization
        d3
            .select('#svg-maintainability')
            .datum(data)
            .call(bubble)
                ;

        var node = svg.selectAll(".node")
            .data(
                bubble.nodes(mapDatas(data))
                .filter(function(d) { return !d.children; })
            )
            .enter().append("g")
            .attr("class", "node");

            node
                .append('circle')
                // uncomment following line if you want fixed size for your bubble (cyclo=1 => size=1)
                //.attr("r", function(d) { return r(d.value);})
                .attr("r", function(d) { return d.r; })
                .attr("x", function(d) { return x(d.x)})
                .attr("y", function(d) { return y(d.y)})

                .attr("transform", function(d) { return "translate(" + d.x + "," + d.y + ")"; })
                // events
                .on('mouseover', function(d) {
                    var text = '<strong>' + d.name + '</strong>'
                            + "<br />Cyclomatic Complexity : " + format(d.cyclomaticComplexity)
                            + "<br />Maintainability Index: " + format(d.maintainabilityIndex);
                    d3.select('.tooltip').html(text);
                    d3.select(".tooltip").style("opacity", 1);
                })
                .on('mousemove', function() {
                    d3.select(".tooltip")
                            .style("left", (d3.event.pageX + 5) + "px")
                            .style("top",  (d3.event.pageY + 5) + "px");
                })
                .on('mouseout', function() {
                    d3.select(".tooltip").style("opacity", 0);
                })
                // for colorblinds
                .style("fill", function(d) {
                    if(accessibilityEnabled) {
                        return 'url(#hash-'+ validate('maintainabilityIndex', d.maintainabilityIndex) +')'
                    }
                    switch(validate('maintainabilityIndex', d.maintainabilityIndex)) {
                        case 'good':
                            return '#78BA00';
                        case 'warning':
                            return '#F4B300';
                        case 'critical':
                            return '#FF2E12';
                        default:
                            return '#CCCCCC';
                    }
                })
                .style('stroke-width', function(d) {
                    return accessibilityEnabled ? 1 : 0;
                })
                .style('stroke', '#000')
        ;

        // tooltip
        d3.select("body")
                .append("div")
                .attr("class", "tooltip")
                .style("opacity", 0);

        // Save as
        function mapDatas(root) {
            var datas = [];
            var i, color;
            for(i in root) {
                var e = root[i];
                datas.push({
                    "value": parseFloat(e.cyclomaticComplexity) + 1
                    , "name": e.filename
                    , "cyclomaticComplexity": parseFloat(e.cyclomaticComplexity)
                    , "maintainabilityIndex": parseInt(e.maintainabilityIndex)
                });
            }
            return {"children":datas};
        }

        d3.select(self.frameElement).style("height", maxWidth + "px");


        // Save as
        document.getElementById('btn-save-maintainability').onmouseover = function() {
            var e = this;
            if(e.className != 'initialized') {
                var svgc  = document.getElementById('svg-maintainability').childNodes[0]
                        , xml  = new XMLSerializer().serializeToString(svgc)
                        , xmldata = btoa(xml);
                e.href = 'data:application/octet-stream;base64,' + xmldata;
                e.className = 'initialized';
            }
        };


    }






</script>
<script type="text/javascript">



    function updateCustomChart() {
        chartCustom(xAxis, yAxis, rAxis);
        document.getElementById('title-custom').innerHTML = textify(xAxis) + ' / ' + textify(yAxis);
    };


    function chartCustom(xData, yData, rData) {


        var chart;
        document.getElementById('svg-custom').innerHTML = '<svg />';
        nv.addGraph(function() {
            chart = nv.models.scatterChart()
                    .showDistX(true)
                    .showDistY(true)
                    .showLegend(false)
                    .useVoronoi(false)
                    .color(d3.scale.category10().range())
                    .transitionDuration(300)
            ;

            chart.xAxis.tickFormat(d3.format('.02f')).axisLabel(textify(xData));
            chart.yAxis.tickFormat(d3.format('.02f')).axisLabel(textify(yData));
            chart.tooltipContent(function(key, x, y, e, graph) {
                return '<h2>' + e.point.title + '</h2>';
            });
            chart.scatter.useVoronoi(false);


            d3.select("#svg-custom").select("svg")
                    .attr("width",380)
                    .attr("height",300)
                    .datum(mapDatas(data))
                    .call(chart);

            nv.utils.windowResize(chart.update);

            chart.dispatch.on('stateChange', function(e) { ('New State:', JSON.stringify(e)); });


            // Save as
            var svg  = document.getElementById('svg-custom').childNodes[0],
                    xml  = new XMLSerializer().serializeToString(svg),
                    xmldata = btoa(xml),
                    img  = new Image();
            document.getElementById('btn-save-custom').href =  'data:application/octet-stream;base64,' + xmldata;


            return chart;
        });


        function mapDatas(root) {
            var results = [
                { key: textify(xData) + " / " + textify(yData) + " chart", "values": [] }
            ];
            var i;
            for(i in root) {
                var e = root[i];
                results[0].values.push({
                    "title": e.filename
                    , "x": Math.max(0,parseFloat(e[xData]))
                    , "y": Math.max(0,parseFloat(e[yData]))
                    , size: Math.max(0,parseFloat(e[rData]))
                    , shape: 'round'
                });
            }
            return results;
        }

    }


</script>
<script type="text/javascript">

    function updateAbstractnessChart() {
            chartAbstractness();
    };

    function chartAbstractness() {
        if(chartAbstractness.initiazed) return;
        chartAbstractness.initiazed = true;

        var xData = 'abstractness';
        var yData = 'instability';
        var rData = 'loc';

        var chart;
        nv.addGraph(function() {
            chart = nv.models.scatterChart()
                    .showDistX(true)
                    .showDistY(true)
                    .useVoronoi(false)
                    .showLegend(false)
                    .color(d3.scale.category10().range())
                    .transitionDuration(300)
                    .forceY([0, 1])
                    .forceX([0, 1])
            ;

            chart.xAxis.tickFormat(d3.format('.02f'))
                    .axisLabel('Abstractness');
            chart.yAxis.tickFormat(d3.format('.02f'))
                    .axisLabel('Instability')
            chart.tooltipContent(function(key, x, y, e, graph) {
                return '<h2>' + e.point.name + '</h2>';
            });
            chart.scatter.useVoronoi(false);

            d3.select("#svg-abstractness").select("svg")
                    .attr("width",380)
                    .attr("height",300)
                    .attr("class",'svg')
                    .datum(mapDatas(groupedData))
                    .call(chart);

            nv.utils.windowResize(chart.update);

            chart.dispatch.on('stateChange', function(e) { ('New State:', JSON.stringify(e)); });


            // line (legend)
            chart = nv.models.lineChart()
                    .options({
                        margin: {left: 75, bottom: 50},
                        x: function(d,i) { return i},
                        showXAxis: false,
                        showYAxis: false,
                        showLegend: false,
                        transitionDuration: 300
                    })
                    .forceY([0, 1])
                    .forceX([0, 1])
            ;

            d3.select("#svg-abstractness").select("svg")
                    .datum([{key:" ", values:[ {x:0, y:1}, {x:1, y:0}  ]  , color: '#EEE'  }])
                    .attr("width",380)
                    .attr("height",300)
                    .call(chart);



            // btn save as
            var svg = document.getElementById('svg-abstractness').childNodes[0],
                    xml  = new XMLSerializer().serializeToString(svg),
                    xmldata = btoa(xml);
            document.getElementById('btn-save-abstractness').href = 'data:application/octet-stream;base64,' + xmldata;

            return chart;
        });

        function mapDatas(root) {
            var results = [
                { key: textify(xData) + " / " + textify(yData) + " chart", "values": [] }
            ];
            var i;
            for(i in root) {
                var e = root[i];
                results[0].values.push({
                    "name": e.name
                    , "x": Math.max(0,parseFloat(e[xData]))
                    , "y": Math.max(0,parseFloat(e[yData]))
                    , size: Math.max(0,parseFloat([rData]))
                    , shape: 'round'
                });
            }
            return results;
        }
    }
</script>
<script type="text/javascript">
    /**
     * Thank's to http://bl.ocks.org/mbostock/raw/7607999/
     */
    var relations = [{"name":"\\App\\AuthAdapters\\AuthAdapterUser","size":3000,"relations":["\\DateTime","\\DateInterval","App\\Facilitator\\Database\\DatabaseFacilitator","App\\Mapper\\User","SlimAuth\\AuthResponse","App\\Facilitator\\App\\JWTFacilitator","\\App\\AuthAdapters\\AuthResponse"]},{"name":"\\App\\Controller\\AbstractController","size":3000,"relations":["Interop\\Container\\ContainerInterface"]},{"name":"\\App\\Controller\\AtividadeController","size":3000,"relations":["\\App\\Controller\\AbstractController","\\App\\Controller\\AbstractController","Interop\\Container\\ContainerInterface","App\\Mapper\\Projeto","App\\Mapper\\Pessoa","Psr\\Http\\Message\\ServerRequestInterface","Psr\\Http\\Message\\ResponseInterface","App\\Mapper\\Atividade","App\\Mapper\\Material"]},{"name":"\\App\\Controller\\HomeController","size":3000,"relations":["\\App\\Controller\\AbstractController","\\App\\Controller\\AbstractController","Interop\\Container\\ContainerInterface","Psr\\Http\\Message\\ServerRequestInterface","Psr\\Http\\Message\\ResponseInterface"]},{"name":"\\App\\Controller\\MaterialController","size":3000,"relations":["\\App\\Controller\\AbstractController","\\App\\Controller\\AbstractController","Interop\\Container\\ContainerInterface","Psr\\Http\\Message\\ServerRequestInterface","Psr\\Http\\Message\\ResponseInterface","App\\Mapper\\Material"]},{"name":"\\App\\Controller\\PessoaController","size":3000,"relations":["\\App\\Controller\\AbstractController","\\App\\Controller\\AbstractController","Interop\\Container\\ContainerInterface","Psr\\Http\\Message\\ServerRequestInterface","Psr\\Http\\Message\\ResponseInterface","App\\Mapper\\Pessoa"]},{"name":"\\App\\Controller\\ProjetoController","size":3000,"relations":["\\App\\Controller\\AbstractController","\\App\\Controller\\AbstractController","Interop\\Container\\ContainerInterface","Psr\\Http\\Message\\ServerRequestInterface","Psr\\Http\\Message\\ResponseInterface","App\\Mapper\\Projeto"]},{"name":"\\App\\Facilitator\\App\\ContainerFacilitator","size":3000,"relations":["\\App\\Facilitator\\App\\ContainerFacilitator","Slim\\Container","\\App\\Facilitator\\App\\Container","Slim\\App"]},{"name":"\\App\\Facilitator\\App\\JWTFacilitator","size":3000,"relations":["Namshi\\JOSE\\SimpleJWS","Namshi\\JOSE\\JWS"]},{"name":"\\App\\Facilitator\\Database\\DatabaseFacilitator","size":3000,"relations":["\\App\\Facilitator\\Database\\DatabaseFacilitator","App\\Facilitator\\App\\ContainerFacilitator","\\App\\Facilitator\\Database\\$classDatabase","\\Exception","Interop\\Container\\ContainerInterface"]},{"name":"\\App\\Facilitator\\Database\\Drivers\\DoctrineODM","size":3000,"relations":["App\\Facilitator\\App\\ContainerFacilitator","Doctrine\\ODM\\MongoDB\\Configuration","Doctrine\\ODM\\MongoDB\\Mapping\\Driver\\AnnotationDriver","Doctrine\\Common\\Cache\\ApcCache","Doctrine\\MongoDB\\Connection","Doctrine\\ODM\\MongoDB\\DocumentManager","\\App\\Facilitator\\Database\\Drivers\\DocumentManager"]},{"name":"\\App\\Facilitator\\Database\\Drivers\\DoctrineORM","size":3000,"relations":["App\\Facilitator\\App\\ContainerFacilitator","Doctrine\\ORM\\Tools\\Setup","Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver","Doctrine\\ORM\\EntityManager","\\App\\Facilitator\\Database\\Drivers\\EntityManager"]},{"name":"\\App\\Mapper\\Atividade","size":3000,"relations":["Doctrine\\Common\\Collections\\ArrayCollection","\\DateTime","\\App\\Mapper\\Pessoa","\\App\\Mapper\\Projeto","\\App\\Mapper\\DetalhamentoAtividade"]},{"name":"\\App\\Mapper\\DetalhamentoAtividade","size":3000,"relations":["\\App\\Mapper\\Atividade","\\App\\Mapper\\Material"]},{"name":"\\App\\Mapper\\Material","size":3000,"relations":["Doctrine\\Common\\Collections\\ArrayCollection","\\App\\Mapper\\PersistentCollection","\\App\\Mapper\\DetalhamentoAtividade"]},{"name":"\\App\\Mapper\\Pessoa","size":3000,"relations":["Doctrine\\Common\\Collections\\ArrayCollection","\\App\\Mapper\\Atividade"]},{"name":"\\App\\Mapper\\Projeto","size":3000,"relations":["Doctrine\\Common\\Collections\\ArrayCollection","\\App\\Mapper\\Atividade"]},{"name":"\\App\\Mapper\\Repository\\AtividadeRepository","size":3000,"relations":["Doctrine\\ORM\\EntityRepository","App\\Mapper\\Validator\\AtividadeValidator"]},{"name":"\\App\\Mapper\\Repository\\MaterialRepository","size":3000,"relations":["Doctrine\\ORM\\EntityRepository","App\\Mapper\\Validator\\MaterialValidator"]},{"name":"\\App\\Mapper\\Repository\\PersistInterface","size":3000,"relations":[]},{"name":"\\App\\Mapper\\Repository\\PessoaRepository","size":3000,"relations":["Doctrine\\ORM\\EntityRepository"]},{"name":"\\App\\Mapper\\Repository\\ProjetoRepository","size":3000,"relations":["Doctrine\\ORM\\EntityRepository"]},{"name":"\\App\\Mapper\\Validator\\AtividadeValidator","size":3000,"relations":["\\DateTime","\\Exception"]},{"name":"\\App\\Mapper\\Validator\\MaterialValidator","size":3000,"relations":["\\Exception"]},{"name":"\\App\\Mapper\\Validator\\ValidatorInterface","size":3000,"relations":[]},{"name":"\\App\\Middleware\\ExampleMiddleware","size":3000,"relations":[]},{"name":"\\DateTime","relations":[],"size":3000},{"name":"\\DateInterval","relations":[],"size":3000},{"name":"App\\Facilitator\\Database\\DatabaseFacilitator","relations":[],"size":3000},{"name":"App\\Mapper\\User","relations":[],"size":3000},{"name":"SlimAuth\\AuthResponse","relations":[],"size":3000},{"name":"App\\Facilitator\\App\\JWTFacilitator","relations":[],"size":3000},{"name":"\\App\\AuthAdapters\\AuthResponse","relations":[],"size":3000},{"name":"Interop\\Container\\ContainerInterface","relations":[],"size":3000},{"name":"App\\Mapper\\Projeto","relations":[],"size":3000},{"name":"App\\Mapper\\Pessoa","relations":[],"size":3000},{"name":"Psr\\Http\\Message\\ServerRequestInterface","relations":[],"size":3000},{"name":"Psr\\Http\\Message\\ResponseInterface","relations":[],"size":3000},{"name":"App\\Mapper\\Atividade","relations":[],"size":3000},{"name":"App\\Mapper\\Material","relations":[],"size":3000},{"name":"Slim\\Container","relations":[],"size":3000},{"name":"\\App\\Facilitator\\App\\Container","relations":[],"size":3000},{"name":"Slim\\App","relations":[],"size":3000},{"name":"Namshi\\JOSE\\SimpleJWS","relations":[],"size":3000},{"name":"Namshi\\JOSE\\JWS","relations":[],"size":3000},{"name":"App\\Facilitator\\App\\ContainerFacilitator","relations":[],"size":3000},{"name":"\\App\\Facilitator\\Database\\$classDatabase","relations":[],"size":3000},{"name":"\\Exception","relations":[],"size":3000},{"name":"Doctrine\\ODM\\MongoDB\\Configuration","relations":[],"size":3000},{"name":"Doctrine\\ODM\\MongoDB\\Mapping\\Driver\\AnnotationDriver","relations":[],"size":3000},{"name":"Doctrine\\Common\\Cache\\ApcCache","relations":[],"size":3000},{"name":"Doctrine\\MongoDB\\Connection","relations":[],"size":3000},{"name":"Doctrine\\ODM\\MongoDB\\DocumentManager","relations":[],"size":3000},{"name":"\\App\\Facilitator\\Database\\Drivers\\DocumentManager","relations":[],"size":3000},{"name":"Doctrine\\ORM\\Tools\\Setup","relations":[],"size":3000},{"name":"Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver","relations":[],"size":3000},{"name":"Doctrine\\ORM\\EntityManager","relations":[],"size":3000},{"name":"\\App\\Facilitator\\Database\\Drivers\\EntityManager","relations":[],"size":3000},{"name":"Doctrine\\Common\\Collections\\ArrayCollection","relations":[],"size":3000},{"name":"\\App\\Mapper\\PersistentCollection","relations":[],"size":3000},{"name":"Doctrine\\ORM\\EntityRepository","relations":[],"size":3000},{"name":"App\\Mapper\\Validator\\AtividadeValidator","relations":[],"size":3000},{"name":"App\\Mapper\\Validator\\MaterialValidator","relations":[],"size":3000}];

    function updateRelationsChart() {

        if(updateRelationsChart.initiazed) return;
        updateRelationsChart.initiazed = true;

        var diameter = 960,
                radius = diameter / 2,
                innerRadius = radius - 120;

        var cluster = d3.layout.cluster()
                .size([360, innerRadius])
                .sort(null)
                .value(function(d) { return d.size; });

        var bundle = d3.layout.bundle();

        var line = d3.svg.line.radial()
                .interpolate("bundle")
                .tension(.85)
                .radius(function(d) { return d.y; })
                .angle(function(d) { return d.x / 180 * Math.PI; });

        var svg = d3.select("#svg-relations").select("svg")
                .attr("width", diameter)
                .attr("height", diameter)
                .append("g")
                .attr("transform", "translate(" + radius + "," + radius + ")");

        var link = svg.append("g").selectAll(".link"),
                node = svg.append("g").selectAll(".node");



        var nodes = cluster.nodes(packageHierarchy(relations)),
                links = packageImports(nodes);
        link = link
                .data(bundle(links))
                .enter().append("path")
                .each(function(d) { d.source = d[0], d.target = d[d.length - 1]; })
                .attr("class", "link")
                .attr("d", line);

        node = node
                .data(nodes.filter(function(n) { return !n.children; }))
                .enter().append("text")
                .attr("class", "node")
                .attr("dy", ".31em")
                .attr("transform", function(d) { return "rotate(" + (d.x - 90) + ")translate(" + (d.y + 8) + ",0)" + (d.x < 180 ? "" : "rotate(180)"); })
                .style("text-anchor", function(d) { return d.x < 180 ? "start" : "end"; })
                .text(function(d) { return d.key; })
                .on("mouseover", mouseovered)
                .on("mouseout", mouseouted);


//        d3.data(relations);

        function mouseovered(d) {
            node
                    .each(function(n) { n.target = n.source = false; });

            link
                    .classed("link--target", function(l) { if (l.target === d) return l.source.source = true; })
                    .classed("link--source", function(l) { if (l.source === d) return l.target.target = true; })
                    .filter(function(l) { return l.target === d || l.source === d; })
                    .each(function() { this.parentNode.appendChild(this); });

            node
                    .classed("node--target", function(n) { return n.target; })
                    .classed("node--source", function(n) { return n.source; });
        }

        function mouseouted(d) {
            link
                    .classed("link--target", false)
                    .classed("link--source", false);

            node
                    .classed("node--target", false)
                    .classed("node--source", false);
        }

        d3.select(self.frameElement).style("height", diameter + "px");

        // Lazily construct the package hierarchy from class names.
        function packageHierarchy(classes) {
            var map = {};

            function find(name, data) {
                name = (data ? name + ' ' : name);
                var node = map[name], i;
                if (!node) {
                    node = map[name] = data || {name: name, children: []};
                    if (name.length) {
                        node.parent = find(name.substring(0, i = name.lastIndexOf("\\")));
                        if(!node.parent.children) {
                            node.parent.children = []; // fix anomalies
                        }
                        node.parent.children.push(node);
                        node.key = name.substring(i + 1);
                    }
                }
                return node;
            }

            classes.forEach(function(d) {
                find(d.name, d);
            });

            return map[""];
        }

        // Return a list of imports for the given array of nodes.
        function packageImports(nodes) {
            var map = {},
                    imports = [];

            // Compute a map from name to node.
            nodes.forEach(function(d) {
                map[d.name] = d;
            });

            // For each import, construct a link from the source to target node.
            nodes.forEach(function(d) {
                if (d.relations) d.relations.forEach(function(i) {
                    imports.push({source: map[d.name], target: map[i]});
                });
            });

            return imports;
        }


    }


    // Save as
    document.getElementById('btn-save-relations').onmouseover = function() {
        var e = this;
        if(e.className != 'initialized') {
            var svgc  = document.getElementById('svg-relations').childNodes[0]
                    , xml  = new XMLSerializer().serializeToString(svgc)
                    , xmldata = btoa(xml);
            e.href = 'data:application/octet-stream;base64,' + xmldata;
            e.className = 'initialized';
        }
    };


</script>


<script type="text/javascript">

    document.onreadystatechange = function() {
        if(document.readyState == 'complete') {
            // init tabs
            document.getElementById('link-overview').onclick = function() { displayTab(this, 'overview'); updateAbstractnessChart(); updateCustomChart(); updateMaintainabilityChart(); };
            document.getElementById('link-score').onclick = function() { displayTab(this, 'score'); updateScoreChart(); };
            document.getElementById('link-relations').onclick = function() { displayTab(this, 'relations'); updateRelationsChart(); };
            document.getElementById('link-explore').onclick = function() { displayTab(this, 'explore'); updateTableView(); };
            document.getElementById('link-repartition').onclick = function() { displayTab(this, 'repartition'); };
            document.getElementById('link-help').onclick = function() { displayTab(this, 'help')};
            document.getElementById('menu').firstElementChild.onclick();

            // selects
            document.getElementById('xAxis').value = xAxis;
            document.getElementById('yAxis').value = yAxis;
            document.getElementById('rAxis').value = rAxis;

            
        }
    }


    // default selected elements
    var xAxis = 'lcom';
    var yAxis = 'cyclomaticComplexity';
    var rAxis = 'loc';



        var data = [{"filename":"..\/app\/database.php","name":"..\/app\/database.php","loc":40,"logicalLoc":1,"volume":76.11,"length":22,"vocabulary":11,"effort":228.32,"difficulty":"3","time":13,"bugs":0.03,"intelligentContent":25.37,"maintainabilityIndexWithoutComment":"86.69","maintainabilityIndex":"98.82","commentWeight":12.13,"instability":0,"afferentCoupling":0,"efferentCoupling":0,"noc":0,"noca":0,"nocc":0,"noc-anon":0,"noi":0,"nom":0,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":0,"sysc":0,"rsysc":0,"dc":0,"rdc":0,"sc":0,"rsc":0},{"filename":"..\/app\/dependencies.php","name":"..\/app\/dependencies.php","loc":59,"logicalLoc":23,"volume":1099.18,"length":191,"vocabulary":54,"effort":10002.57,"difficulty":"9.1","time":556,"bugs":0.37,"intelligentContent":120.79,"maintainabilityIndexWithoutComment":"48.87","maintainabilityIndex":"83.12","commentWeight":34.25,"instability":0,"afferentCoupling":0,"efferentCoupling":0,"noc":0,"noca":0,"nocc":0,"noc-anon":0,"noi":0,"nom":0,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":0,"sysc":0,"rsysc":0,"dc":0,"rdc":0,"sc":0,"rsc":0},{"filename":"..\/app\/middleware.php","name":"..\/app\/middleware.php","loc":8,"logicalLoc":0,"volume":0,"length":0,"vocabulary":0,"effort":0,"difficulty":"0","time":0,"bugs":0,"intelligentContent":0,"maintainabilityIndexWithoutComment":"171","maintainabilityIndex":"218.04","commentWeight":47.04,"instability":0,"afferentCoupling":0,"efferentCoupling":0,"noc":0,"noca":0,"nocc":0,"noc-anon":0,"noi":0,"nom":0,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":0,"sysc":0,"rsysc":0,"dc":0,"rdc":0,"sc":0,"rsc":0},{"filename":"..\/app\/routes.php","name":"..\/app\/routes.php","loc":48,"logicalLoc":17,"volume":282,"length":94,"vocabulary":8,"effort":2209,"difficulty":"7.83","time":123,"bugs":0.09,"intelligentContent":36,"maintainabilityIndexWithoutComment":"55.87","maintainabilityIndex":"66.96","commentWeight":11.09,"instability":0,"afferentCoupling":0,"efferentCoupling":0,"noc":0,"noca":0,"nocc":0,"noc-anon":0,"noi":0,"nom":0,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":0,"sysc":0,"rsysc":0,"dc":0,"rdc":0,"sc":0,"rsc":0},{"filename":"..\/app\/settings.php","name":"..\/app\/settings.php","loc":35,"logicalLoc":1,"volume":78,"length":26,"vocabulary":8,"effort":585,"difficulty":"7.5","time":33,"bugs":0.03,"intelligentContent":10.4,"maintainabilityIndexWithoutComment":"86.62","maintainabilityIndex":"111.63","commentWeight":25.01,"instability":0,"afferentCoupling":0,"efferentCoupling":0,"noc":0,"noca":0,"nocc":0,"noc-anon":0,"noi":0,"nom":0,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":0,"sysc":0,"rsysc":0,"dc":0,"rdc":0,"sc":0,"rsc":0},{"filename":"..\/app\/src\/AuthAdapters\/AuthAdapterUser.php","name":"..\/app\/src\/AuthAdapters\/AuthAdapterUser.php","loc":83,"logicalLoc":22,"volume":880.77,"length":151,"vocabulary":57,"effort":9056.58,"difficulty":"10.28","time":503,"bugs":0.29,"intelligentContent":85.66,"maintainabilityIndexWithoutComment":"49.83","maintainabilityIndex":"88.48","commentWeight":38.65,"instability":1,"afferentCoupling":0,"efferentCoupling":6,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":2,"cyclomaticComplexity":2,"myerInterval":"2:2","myerDistance":0,"operators":0,"lcom":1,"sysc":38.14,"rsysc":19.07,"dc":2.14,"rdc":1.07,"sc":36,"rsc":18},{"filename":"..\/app\/src\/Controller\/AbstractController.php","name":"..\/app\/src\/Controller\/AbstractController.php","loc":54,"logicalLoc":13,"volume":318.95,"length":65,"vocabulary":30,"effort":932.31,"difficulty":"2.92","time":52,"bugs":0.11,"intelligentContent":109.11,"maintainabilityIndexWithoutComment":"58.03","maintainabilityIndex":"101.5","commentWeight":43.47,"instability":0.17,"afferentCoupling":5,"efferentCoupling":1,"noc":1,"noca":1,"nocc":0,"noc-anon":0,"noi":0,"nom":1,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":1,"sysc":1.5,"rsysc":1.5,"dc":0.5,"rdc":0.5,"sc":1,"rsc":1},{"filename":"..\/app\/src\/Controller\/AtividadeController.php","name":"..\/app\/src\/Controller\/AtividadeController.php","loc":74,"logicalLoc":16,"volume":796.32,"length":145,"vocabulary":45,"effort":6601.06,"difficulty":"8.29","time":367,"bugs":0.27,"intelligentContent":96.06,"maintainabilityIndexWithoutComment":"53.29","maintainabilityIndex":"94.53","commentWeight":41.24,"instability":1,"afferentCoupling":0,"efferentCoupling":8,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":4,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":2,"sysc":40.43,"rsysc":10.11,"dc":2.43,"rdc":0.61,"sc":38,"rsc":9.5},{"filename":"..\/app\/src\/Controller\/HomeController.php","name":"..\/app\/src\/Controller\/HomeController.php","loc":40,"logicalLoc":6,"volume":199.71,"length":42,"vocabulary":27,"effort":855.88,"difficulty":"4.29","time":48,"bugs":0.07,"intelligentContent":46.6,"maintainabilityIndexWithoutComment":"66.78","maintainabilityIndex":"111.24","commentWeight":44.46,"instability":1,"afferentCoupling":0,"efferentCoupling":4,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":2,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":2,"sysc":9.33,"rsysc":4.67,"dc":1.33,"rdc":0.67,"sc":8,"rsc":4},{"filename":"..\/app\/src\/Controller\/MaterialController.php","name":"..\/app\/src\/Controller\/MaterialController.php","loc":71,"logicalLoc":15,"volume":653.53,"length":119,"vocabulary":45,"effort":5228.24,"difficulty":"8","time":290,"bugs":0.22,"intelligentContent":81.69,"maintainabilityIndexWithoutComment":"54.5","maintainabilityIndex":"94.8","commentWeight":40.3,"instability":1,"afferentCoupling":0,"efferentCoupling":5,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":4,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":2,"sysc":28.83,"rsysc":7.21,"dc":2.83,"rdc":0.71,"sc":26,"rsc":6.5},{"filename":"..\/app\/src\/Controller\/PessoaController.php","name":"..\/app\/src\/Controller\/PessoaController.php","loc":78,"logicalLoc":15,"volume":653.53,"length":119,"vocabulary":45,"effort":5228.24,"difficulty":"8","time":290,"bugs":0.22,"intelligentContent":81.69,"maintainabilityIndexWithoutComment":"54.5","maintainabilityIndex":"97.18","commentWeight":42.68,"instability":1,"afferentCoupling":0,"efferentCoupling":5,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":4,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":2,"sysc":28.83,"rsysc":7.21,"dc":2.83,"rdc":0.71,"sc":26,"rsc":6.5},{"filename":"..\/app\/src\/Controller\/ProjetoController.php","name":"..\/app\/src\/Controller\/ProjetoController.php","loc":78,"logicalLoc":15,"volume":637.05,"length":116,"vocabulary":45,"effort":5027.57,"difficulty":"7.89","time":279,"bugs":0.21,"intelligentContent":80.72,"maintainabilityIndexWithoutComment":"54.58","maintainabilityIndex":"97.26","commentWeight":42.68,"instability":1,"afferentCoupling":0,"efferentCoupling":5,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":4,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":2,"sysc":28.83,"rsysc":7.21,"dc":2.83,"rdc":0.71,"sc":26,"rsc":6.5},{"filename":"..\/app\/src\/Facilitator\/App\/ContainerFacilitator.php","name":"..\/app\/src\/Facilitator\/App\/ContainerFacilitator.php","loc":32,"logicalLoc":7,"volume":182.66,"length":43,"vocabulary":19,"effort":1890.54,"difficulty":"10.35","time":105,"bugs":0.06,"intelligentContent":17.65,"maintainabilityIndexWithoutComment":"65.46","maintainabilityIndex":"104.88","commentWeight":39.42,"instability":0.75,"afferentCoupling":1,"efferentCoupling":3,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":2,"cyclomaticComplexity":2,"myerInterval":"2:2","myerDistance":0,"operators":0,"lcom":2,"sysc":9,"rsysc":4.5,"dc":1,"rdc":0.5,"sc":8,"rsc":4},{"filename":"..\/app\/src\/Facilitator\/App\/JWTFacilitator.php","name":"..\/app\/src\/Facilitator\/App\/JWTFacilitator.php","loc":56,"logicalLoc":14,"volume":499.4,"length":99,"vocabulary":33,"effort":4168.03,"difficulty":"8.35","time":232,"bugs":0.17,"intelligentContent":59.84,"maintainabilityIndexWithoutComment":"55.97","maintainabilityIndex":"94.45","commentWeight":38.48,"instability":1,"afferentCoupling":0,"efferentCoupling":2,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":3,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":3,"sysc":10.5,"rsysc":3.5,"dc":4.5,"rdc":1.5,"sc":6,"rsc":2},{"filename":"..\/app\/src\/Facilitator\/Database\/DatabaseFacilitator.php","name":"..\/app\/src\/Facilitator\/Database\/DatabaseFacilitator.php","loc":61,"logicalLoc":17,"volume":605.26,"length":118,"vocabulary":35,"effort":8460.97,"difficulty":"13.98","time":470,"bugs":0.2,"intelligentContent":43.3,"maintainabilityIndexWithoutComment":"53.01","maintainabilityIndex":"85.8","commentWeight":32.79,"instability":0.83,"afferentCoupling":1,"efferentCoupling":5,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":3,"cyclomaticComplexity":5,"myerInterval":"5:6","myerDistance":1,"operators":1,"lcom":3,"sysc":14.83,"rsysc":4.94,"dc":0.83,"rdc":0.28,"sc":14,"rsc":4.67},{"filename":"..\/app\/src\/Facilitator\/Database\/Drivers\/DoctrineODM.php","name":"..\/app\/src\/Facilitator\/Database\/Drivers\/DoctrineODM.php","loc":70,"logicalLoc":31,"volume":1224.32,"length":209,"vocabulary":58,"effort":18038.29,"difficulty":"14.73","time":1002,"bugs":0.41,"intelligentContent":83.1,"maintainabilityIndexWithoutComment":"45.31","maintainabilityIndex":"76.27","commentWeight":30.96,"instability":1,"afferentCoupling":0,"efferentCoupling":6,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":1,"cyclomaticComplexity":4,"myerInterval":"4:5","myerDistance":1,"operators":1,"lcom":1,"sysc":36.14,"rsysc":36.14,"dc":0.14,"rdc":0.14,"sc":36,"rsc":36},{"filename":"..\/app\/src\/Facilitator\/Database\/Drivers\/DoctrineORM.php","name":"..\/app\/src\/Facilitator\/Database\/Drivers\/DoctrineORM.php","loc":60,"logicalLoc":22,"volume":928.12,"length":169,"vocabulary":45,"effort":7826.34,"difficulty":"8.43","time":435,"bugs":0.31,"intelligentContent":110.07,"maintainabilityIndexWithoutComment":"49.8","maintainabilityIndex":"84.77","commentWeight":34.97,"instability":1,"afferentCoupling":0,"efferentCoupling":4,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":1,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":1,"sysc":16.2,"rsysc":16.2,"dc":0.2,"rdc":0.2,"sc":16,"rsc":16},{"filename":"..\/app\/src\/Mapper\/Atividade.php","name":"..\/app\/src\/Mapper\/Atividade.php","loc":197,"logicalLoc":27,"volume":919.24,"length":159,"vocabulary":55,"effort":5402.86,"difficulty":"5.88","time":300,"bugs":0.31,"intelligentContent":156.4,"maintainabilityIndexWithoutComment":"47.89","maintainabilityIndex":"91.89","commentWeight":44,"instability":0.63,"afferentCoupling":3,"efferentCoupling":5,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":15,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":1,"sysc":17,"rsysc":1.13,"dc":12,"rdc":0.8,"sc":5,"rsc":0.33},{"filename":"..\/app\/src\/Mapper\/DetalhamentoAtividade.php","name":"..\/app\/src\/Mapper\/DetalhamentoAtividade.php","loc":115,"logicalLoc":14,"volume":421.11,"length":85,"vocabulary":31,"effort":2065.04,"difficulty":"4.9","time":115,"bugs":0.14,"intelligentContent":85.87,"maintainabilityIndexWithoutComment":"56.49","maintainabilityIndex":"101.05","commentWeight":44.56,"instability":0.5,"afferentCoupling":2,"efferentCoupling":2,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":8,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":0,"sysc":10,"rsysc":1.25,"dc":6,"rdc":0.75,"sc":4,"rsc":0.5},{"filename":"..\/app\/src\/Mapper\/Material.php","name":"..\/app\/src\/Mapper\/Material.php","loc":118,"logicalLoc":17,"volume":549.68,"length":104,"vocabulary":39,"effort":3148.18,"difficulty":"5.73","time":175,"bugs":0.18,"intelligentContent":95.98,"maintainabilityIndexWithoutComment":"53.84","maintainabilityIndex":"97.16","commentWeight":43.32,"instability":0.75,"afferentCoupling":1,"efferentCoupling":3,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":9,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":1,"sysc":10,"rsysc":1.11,"dc":7,"rdc":0.78,"sc":3,"rsc":0.33},{"filename":"..\/app\/src\/Mapper\/Pessoa.php","name":"..\/app\/src\/Mapper\/Pessoa.php","loc":119,"logicalLoc":17,"volume":535.29,"length":102,"vocabulary":38,"effort":3111.37,"difficulty":"5.81","time":173,"bugs":0.18,"intelligentContent":92.09,"maintainabilityIndexWithoutComment":"53.92","maintainabilityIndex":"97.37","commentWeight":43.45,"instability":0.67,"afferentCoupling":1,"efferentCoupling":2,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":9,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":1,"sysc":9.5,"rsysc":1.06,"dc":7.5,"rdc":0.83,"sc":2,"rsc":0.22},{"filename":"..\/app\/src\/Mapper\/Projeto.php","name":"..\/app\/src\/Mapper\/Projeto.php","loc":97,"logicalLoc":14,"volume":422.26,"length":83,"vocabulary":34,"effort":2307.35,"difficulty":"5.46","time":128,"bugs":0.14,"intelligentContent":77.28,"maintainabilityIndexWithoutComment":"56.48","maintainabilityIndex":"99.69","commentWeight":43.21,"instability":0.67,"afferentCoupling":1,"efferentCoupling":2,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":7,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":1,"sysc":7.5,"rsysc":1.07,"dc":5.5,"rdc":0.79,"sc":2,"rsc":0.29},{"filename":"..\/app\/src\/Mapper\/Repository\/AtividadeRepository.php","name":"..\/app\/src\/Mapper\/Repository\/AtividadeRepository.php","loc":46,"logicalLoc":10,"volume":343.48,"length":70,"vocabulary":30,"effort":1511.32,"difficulty":"4.4","time":84,"bugs":0.11,"intelligentContent":78.06,"maintainabilityIndexWithoutComment":"60.3","maintainabilityIndex":"98.02","commentWeight":37.72,"instability":1,"afferentCoupling":0,"efferentCoupling":1,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":3,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":1,"sysc":4.5,"rsysc":1.5,"dc":3.5,"rdc":1.17,"sc":1,"rsc":0.33},{"filename":"..\/app\/src\/Mapper\/Repository\/MaterialRepository.php","name":"..\/app\/src\/Mapper\/Repository\/MaterialRepository.php","loc":57,"logicalLoc":12,"volume":420,"length":84,"vocabulary":32,"effort":2022.22,"difficulty":"4.81","time":112,"bugs":0.14,"intelligentContent":87.23,"maintainabilityIndexWithoutComment":"57.96","maintainabilityIndex":"93.64","commentWeight":35.68,"instability":1,"afferentCoupling":0,"efferentCoupling":1,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":4,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":1,"sysc":5.5,"rsysc":1.38,"dc":4.5,"rdc":1.13,"sc":1,"rsc":0.25},{"filename":"..\/app\/src\/Mapper\/Repository\/PersistInterface.php","name":"..\/app\/src\/Mapper\/Repository\/PersistInterface.php","loc":21,"logicalLoc":3,"volume":33,"length":11,"vocabulary":8,"effort":18.86,"difficulty":"0.57","time":1,"bugs":0.01,"intelligentContent":57.75,"maintainabilityIndexWithoutComment":"78.82","maintainabilityIndex":"124.88","commentWeight":46.06,"instability":0,"afferentCoupling":0,"efferentCoupling":0,"noc":1,"noca":1,"nocc":0,"noc-anon":0,"noi":1,"nom":2,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":0,"sysc":2,"rsysc":1,"dc":2,"rdc":1,"sc":0,"rsc":0},{"filename":"..\/app\/src\/Mapper\/Repository\/PessoaRepository.php","name":"..\/app\/src\/Mapper\/Repository\/PessoaRepository.php","loc":44,"logicalLoc":7,"volume":252.17,"length":55,"vocabulary":24,"effort":630.43,"difficulty":"2.5","time":35,"bugs":0.08,"intelligentContent":100.87,"maintainabilityIndexWithoutComment":"64.61","maintainabilityIndex":"102.95","commentWeight":38.34,"instability":0,"afferentCoupling":0,"efferentCoupling":0,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":3,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":1,"sysc":4,"rsysc":1.33,"dc":4,"rdc":1.33,"sc":0,"rsc":0},{"filename":"..\/app\/src\/Mapper\/Repository\/ProjetoRepository.php","name":"..\/app\/src\/Mapper\/Repository\/ProjetoRepository.php","loc":30,"logicalLoc":6,"volume":170.97,"length":41,"vocabulary":18,"effort":288.51,"difficulty":"1.69","time":16,"bugs":0.06,"intelligentContent":101.31,"maintainabilityIndexWithoutComment":"67.26","maintainabilityIndex":"106.25","commentWeight":38.99,"instability":0,"afferentCoupling":0,"efferentCoupling":0,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":2,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":1,"sysc":2,"rsysc":1,"dc":2,"rdc":1,"sc":0,"rsc":0},{"filename":"..\/app\/src\/Mapper\/Validator\/AtividadeValidator.php","name":"..\/app\/src\/Mapper\/Validator\/AtividadeValidator.php","loc":45,"logicalLoc":8,"volume":282.03,"length":60,"vocabulary":26,"effort":1942.85,"difficulty":"6.89","time":108,"bugs":0.09,"intelligentContent":40.94,"maintainabilityIndexWithoutComment":"62.47","maintainabilityIndex":"100.5","commentWeight":38.03,"instability":1,"afferentCoupling":0,"efferentCoupling":2,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":1,"cyclomaticComplexity":5,"myerInterval":"5:5","myerDistance":0,"operators":0,"lcom":1,"sysc":4.67,"rsysc":4.67,"dc":0.67,"rdc":0.67,"sc":4,"rsc":4},{"filename":"..\/app\/src\/Mapper\/Validator\/MaterialValidator.php","name":"..\/app\/src\/Mapper\/Validator\/MaterialValidator.php","loc":28,"logicalLoc":4,"volume":100.08,"length":24,"vocabulary":18,"effort":375.29,"difficulty":"3.75","time":21,"bugs":0.03,"intelligentContent":26.69,"maintainabilityIndexWithoutComment":"72.59","maintainabilityIndex":"113.86","commentWeight":41.27,"instability":1,"afferentCoupling":0,"efferentCoupling":1,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":1,"cyclomaticComplexity":2,"myerInterval":"2:2","myerDistance":0,"operators":0,"lcom":1,"sysc":2,"rsysc":2,"dc":1,"rdc":1,"sc":1,"rsc":1},{"filename":"..\/app\/src\/Mapper\/Validator\/ValidatorInterface.php","name":"..\/app\/src\/Mapper\/Validator\/ValidatorInterface.php","loc":15,"logicalLoc":2,"volume":22.46,"length":8,"vocabulary":7,"effort":11.23,"difficulty":"0.5","time":1,"bugs":0.01,"intelligentContent":44.92,"maintainabilityIndexWithoutComment":"83.84","maintainabilityIndex":"129.09","commentWeight":45.25,"instability":0,"afferentCoupling":0,"efferentCoupling":0,"noc":1,"noca":1,"nocc":0,"noc-anon":0,"noi":1,"nom":1,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":0,"sysc":1,"rsysc":1,"dc":1,"rdc":1,"sc":0,"rsc":0},{"filename":"..\/app\/src\/Middleware\/ExampleMiddleware.php","name":"..\/app\/src\/Middleware\/ExampleMiddleware.php","loc":31,"logicalLoc":7,"volume":162.63,"length":39,"vocabulary":18,"effort":604.04,"difficulty":"3.71","time":34,"bugs":0.05,"intelligentContent":43.78,"maintainabilityIndexWithoutComment":"65.95","maintainabilityIndex":"108.11","commentWeight":42.16,"instability":0,"afferentCoupling":0,"efferentCoupling":0,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":1,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":1,"sysc":4,"rsysc":4,"dc":4,"rdc":4,"sc":0,"rsc":0}]
    var groupedData = [{"name":"..","childs":[],"depth":2,"abstractness":0.12,"instability":0.83,"average":{"filename":0,"name":0,"loc":61.61,"logicalLoc":12.35,"volume":443.53,"length":85.58,"vocabulary":30.42,"effort":3541.24,"difficulty":6.11,"time":196.81,"bugs":0.15,"intelligentContent":70.23,"maintainabilityIndexWithoutComment":64.28,"maintainabilityIndex":102.39,"commentWeight":38.12,"instability":0.58,"afferentCoupling":0.48,"efferentCoupling":2.35,"noc":0.84,"noca":0.1,"nocc":0.74,"noc-anon":0,"noi":0.06,"nom":3.13,"cyclomaticComplexity":1.45,"myerInterval":1.45,"myerDistance":0.06,"operators":0.06,"lcom":1.06,"sysc":11.17,"rsysc":4.7,"dc":2.65,"rdc":0.77,"sc":8.52,"rsc":3.93},"min":{"filename":"..\/app\/database.php","name":"..\/app\/database.php","loc":8,"logicalLoc":0,"volume":0,"length":0,"vocabulary":0,"effort":0,"difficulty":"0","time":0,"bugs":0,"intelligentContent":0,"maintainabilityIndexWithoutComment":"45.31","maintainabilityIndex":"66.96","commentWeight":11.09,"instability":0,"afferentCoupling":0,"efferentCoupling":0,"noc":0,"noca":0,"nocc":0,"noc-anon":0,"noi":0,"nom":0,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":0,"sysc":0,"rsysc":0,"dc":0,"rdc":0,"sc":0,"rsc":0},"max":{"filename":"..\/app\/src\/Middleware\/ExampleMiddleware.php","name":"..\/app\/src\/Middleware\/ExampleMiddleware.php","loc":197,"logicalLoc":31,"volume":1224.32,"length":209,"vocabulary":58,"effort":18038.29,"difficulty":"14.73","time":1002,"bugs":0.41,"intelligentContent":156.4,"maintainabilityIndexWithoutComment":"171","maintainabilityIndex":"218.04","commentWeight":47.04,"instability":1,"afferentCoupling":5,"efferentCoupling":8,"noc":1,"noca":1,"nocc":1,"noc-anon":0,"noi":1,"nom":15,"cyclomaticComplexity":5,"myerInterval":"5:6","myerDistance":1,"operators":1,"lcom":3,"sysc":40.43,"rsysc":36.14,"dc":12,"rdc":4,"sc":38,"rsc":36},"sum":{"filename":0,"name":0,"loc":1910,"logicalLoc":383,"volume":13749.31,"length":2653,"vocabulary":943,"effort":109778.49,"difficulty":189.54,"time":6101,"bugs":4.59,"intelligentContent":2177.22,"maintainabilityIndexWithoutComment":1992.53,"maintainabilityIndex":3174.19,"commentWeight":1181.66,"instability":17.97,"afferentCoupling":15,"efferentCoupling":73,"noc":26,"noca":3,"nocc":23,"noc-anon":0,"noi":2,"nom":97,"cyclomaticComplexity":45,"myerInterval":45,"myerDistance":2,"operators":2,"lcom":33,"sysc":346.23,"rsysc":145.76,"dc":82.23,"rdc":23.85,"sc":264,"rsc":121.92}},{"name":"..\/app","childs":[{"filename":"..\/app\/database.php","name":"..\/app\/database.php","loc":40,"logicalLoc":1,"volume":76.11,"length":22,"vocabulary":11,"effort":228.32,"difficulty":"3","time":13,"bugs":0.03,"intelligentContent":25.37,"maintainabilityIndexWithoutComment":"86.69","maintainabilityIndex":"98.82","commentWeight":12.13,"instability":0,"afferentCoupling":0,"efferentCoupling":0,"noc":0,"noca":0,"nocc":0,"noc-anon":0,"noi":0,"nom":0,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":0,"sysc":0,"rsysc":0,"dc":0,"rdc":0,"sc":0,"rsc":0},{"filename":"..\/app\/dependencies.php","name":"..\/app\/dependencies.php","loc":59,"logicalLoc":23,"volume":1099.18,"length":191,"vocabulary":54,"effort":10002.57,"difficulty":"9.1","time":556,"bugs":0.37,"intelligentContent":120.79,"maintainabilityIndexWithoutComment":"48.87","maintainabilityIndex":"83.12","commentWeight":34.25,"instability":0,"afferentCoupling":0,"efferentCoupling":0,"noc":0,"noca":0,"nocc":0,"noc-anon":0,"noi":0,"nom":0,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":0,"sysc":0,"rsysc":0,"dc":0,"rdc":0,"sc":0,"rsc":0},{"filename":"..\/app\/middleware.php","name":"..\/app\/middleware.php","loc":8,"logicalLoc":0,"volume":0,"length":0,"vocabulary":0,"effort":0,"difficulty":"0","time":0,"bugs":0,"intelligentContent":0,"maintainabilityIndexWithoutComment":"171","maintainabilityIndex":"218.04","commentWeight":47.04,"instability":0,"afferentCoupling":0,"efferentCoupling":0,"noc":0,"noca":0,"nocc":0,"noc-anon":0,"noi":0,"nom":0,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":0,"sysc":0,"rsysc":0,"dc":0,"rdc":0,"sc":0,"rsc":0},{"filename":"..\/app\/routes.php","name":"..\/app\/routes.php","loc":48,"logicalLoc":17,"volume":282,"length":94,"vocabulary":8,"effort":2209,"difficulty":"7.83","time":123,"bugs":0.09,"intelligentContent":36,"maintainabilityIndexWithoutComment":"55.87","maintainabilityIndex":"66.96","commentWeight":11.09,"instability":0,"afferentCoupling":0,"efferentCoupling":0,"noc":0,"noca":0,"nocc":0,"noc-anon":0,"noi":0,"nom":0,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":0,"sysc":0,"rsysc":0,"dc":0,"rdc":0,"sc":0,"rsc":0},{"filename":"..\/app\/settings.php","name":"..\/app\/settings.php","loc":35,"logicalLoc":1,"volume":78,"length":26,"vocabulary":8,"effort":585,"difficulty":"7.5","time":33,"bugs":0.03,"intelligentContent":10.4,"maintainabilityIndexWithoutComment":"86.62","maintainabilityIndex":"111.63","commentWeight":25.01,"instability":0,"afferentCoupling":0,"efferentCoupling":0,"noc":0,"noca":0,"nocc":0,"noc-anon":0,"noi":0,"nom":0,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":0,"sysc":0,"rsysc":0,"dc":0,"rdc":0,"sc":0,"rsc":0}],"depth":2,"abstractness":0.12,"instability":0.83,"average":{"filename":0,"name":0,"loc":61.61,"logicalLoc":12.35,"volume":443.53,"length":85.58,"vocabulary":30.42,"effort":3541.24,"difficulty":6.11,"time":196.81,"bugs":0.15,"intelligentContent":70.23,"maintainabilityIndexWithoutComment":64.28,"maintainabilityIndex":102.39,"commentWeight":38.12,"instability":0.58,"afferentCoupling":0.48,"efferentCoupling":2.35,"noc":0.84,"noca":0.1,"nocc":0.74,"noc-anon":0,"noi":0.06,"nom":3.13,"cyclomaticComplexity":1.45,"myerInterval":1.45,"myerDistance":0.06,"operators":0.06,"lcom":1.06,"sysc":11.17,"rsysc":4.7,"dc":2.65,"rdc":0.77,"sc":8.52,"rsc":3.93},"min":{"filename":"..\/app\/database.php","name":"..\/app\/database.php","loc":8,"logicalLoc":0,"volume":0,"length":0,"vocabulary":0,"effort":0,"difficulty":"0","time":0,"bugs":0,"intelligentContent":0,"maintainabilityIndexWithoutComment":"45.31","maintainabilityIndex":"66.96","commentWeight":11.09,"instability":0,"afferentCoupling":0,"efferentCoupling":0,"noc":0,"noca":0,"nocc":0,"noc-anon":0,"noi":0,"nom":0,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":0,"sysc":0,"rsysc":0,"dc":0,"rdc":0,"sc":0,"rsc":0},"max":{"filename":"..\/app\/src\/Middleware\/ExampleMiddleware.php","name":"..\/app\/src\/Middleware\/ExampleMiddleware.php","loc":197,"logicalLoc":31,"volume":1224.32,"length":209,"vocabulary":58,"effort":18038.29,"difficulty":"14.73","time":1002,"bugs":0.41,"intelligentContent":156.4,"maintainabilityIndexWithoutComment":"171","maintainabilityIndex":"218.04","commentWeight":47.04,"instability":1,"afferentCoupling":5,"efferentCoupling":8,"noc":1,"noca":1,"nocc":1,"noc-anon":0,"noi":1,"nom":15,"cyclomaticComplexity":5,"myerInterval":"5:6","myerDistance":1,"operators":1,"lcom":3,"sysc":40.43,"rsysc":36.14,"dc":12,"rdc":4,"sc":38,"rsc":36},"sum":{"filename":0,"name":0,"loc":1910,"logicalLoc":383,"volume":13749.31,"length":2653,"vocabulary":943,"effort":109778.49,"difficulty":189.54,"time":6101,"bugs":4.59,"intelligentContent":2177.22,"maintainabilityIndexWithoutComment":1992.53,"maintainabilityIndex":3174.19,"commentWeight":1181.66,"instability":17.97,"afferentCoupling":15,"efferentCoupling":73,"noc":26,"noca":3,"nocc":23,"noc-anon":0,"noi":2,"nom":97,"cyclomaticComplexity":45,"myerInterval":45,"myerDistance":2,"operators":2,"lcom":33,"sysc":346.23,"rsysc":145.76,"dc":82.23,"rdc":23.85,"sc":264,"rsc":121.92}},{"name":"..\/app\/src","childs":[],"depth":3,"abstractness":0.12,"instability":0.83,"average":{"filename":0,"name":0,"loc":66.15,"logicalLoc":13.12,"volume":469.77,"length":89.23,"vocabulary":33.15,"effort":3721.29,"difficulty":6.24,"time":206.77,"bugs":0.16,"intelligentContent":76.33,"maintainabilityIndexWithoutComment":59.36,"maintainabilityIndex":99.83,"commentWeight":40.47,"instability":0.69,"afferentCoupling":0.58,"efferentCoupling":2.81,"noc":1,"noca":0.12,"nocc":0.88,"noc-anon":0,"noi":0.08,"nom":3.73,"cyclomaticComplexity":1.54,"myerInterval":1.54,"myerDistance":0.08,"operators":0.08,"lcom":1.27,"sysc":13.32,"rsysc":5.61,"dc":3.16,"rdc":0.92,"sc":10.15,"rsc":4.69},"min":{"filename":"..\/app\/src\/AuthAdapters\/AuthAdapterUser.php","name":"..\/app\/src\/AuthAdapters\/AuthAdapterUser.php","loc":15,"logicalLoc":2,"volume":22.46,"length":8,"vocabulary":7,"effort":11.23,"difficulty":"0.5","time":1,"bugs":0.01,"intelligentContent":17.65,"maintainabilityIndexWithoutComment":"45.31","maintainabilityIndex":"76.27","commentWeight":30.96,"instability":0,"afferentCoupling":0,"efferentCoupling":0,"noc":1,"noca":0,"nocc":0,"noc-anon":0,"noi":0,"nom":1,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":0,"sysc":1,"rsysc":1,"dc":0.14,"rdc":0.14,"sc":0,"rsc":0},"max":{"filename":"..\/app\/src\/Middleware\/ExampleMiddleware.php","name":"..\/app\/src\/Middleware\/ExampleMiddleware.php","loc":197,"logicalLoc":31,"volume":1224.32,"length":209,"vocabulary":58,"effort":18038.29,"difficulty":"14.73","time":1002,"bugs":0.41,"intelligentContent":156.4,"maintainabilityIndexWithoutComment":"83.84","maintainabilityIndex":"129.09","commentWeight":46.06,"instability":1,"afferentCoupling":5,"efferentCoupling":8,"noc":1,"noca":1,"nocc":1,"noc-anon":0,"noi":1,"nom":15,"cyclomaticComplexity":5,"myerInterval":"5:6","myerDistance":1,"operators":1,"lcom":3,"sysc":40.43,"rsysc":36.14,"dc":12,"rdc":4,"sc":38,"rsc":36},"sum":{"filename":0,"name":0,"loc":1720,"logicalLoc":341,"volume":12214.02,"length":2320,"vocabulary":862,"effort":96753.6,"difficulty":162.11,"time":5376,"bugs":4.07,"intelligentContent":1984.66,"maintainabilityIndexWithoutComment":1543.48,"maintainabilityIndex":2595.62,"commentWeight":1052.14,"instability":17.97,"afferentCoupling":15,"efferentCoupling":73,"noc":26,"noca":3,"nocc":23,"noc-anon":0,"noi":2,"nom":97,"cyclomaticComplexity":40,"myerInterval":40,"myerDistance":2,"operators":2,"lcom":33,"sysc":346.23,"rsysc":145.76,"dc":82.23,"rdc":23.85,"sc":264,"rsc":121.92}},{"name":"..\/app\/src\/AuthAdapters","childs":[{"filename":"..\/app\/src\/AuthAdapters\/AuthAdapterUser.php","name":"..\/app\/src\/AuthAdapters\/AuthAdapterUser.php","loc":83,"logicalLoc":22,"volume":880.77,"length":151,"vocabulary":57,"effort":9056.58,"difficulty":"10.28","time":503,"bugs":0.29,"intelligentContent":85.66,"maintainabilityIndexWithoutComment":"49.83","maintainabilityIndex":"88.48","commentWeight":38.65,"instability":1,"afferentCoupling":0,"efferentCoupling":6,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":2,"cyclomaticComplexity":2,"myerInterval":"2:2","myerDistance":0,"operators":0,"lcom":1,"sysc":38.14,"rsysc":19.07,"dc":2.14,"rdc":1.07,"sc":36,"rsc":18}],"depth":4,"abstractness":0,"instability":1,"average":{"filename":0,"name":0,"loc":83,"logicalLoc":22,"volume":880.77,"length":151,"vocabulary":57,"effort":9056.58,"difficulty":10.28,"time":503,"bugs":0.29,"intelligentContent":85.66,"maintainabilityIndexWithoutComment":49.83,"maintainabilityIndex":88.48,"commentWeight":38.65,"instability":1,"afferentCoupling":0,"efferentCoupling":6,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":2,"cyclomaticComplexity":2,"myerInterval":2,"myerDistance":0,"operators":0,"lcom":1,"sysc":38.14,"rsysc":19.07,"dc":2.14,"rdc":1.07,"sc":36,"rsc":18},"min":{"filename":"..\/app\/src\/AuthAdapters\/AuthAdapterUser.php","name":"..\/app\/src\/AuthAdapters\/AuthAdapterUser.php","loc":83,"logicalLoc":22,"volume":880.77,"length":151,"vocabulary":57,"effort":9056.58,"difficulty":"10.28","time":503,"bugs":0.29,"intelligentContent":85.66,"maintainabilityIndexWithoutComment":"49.83","maintainabilityIndex":"88.48","commentWeight":38.65,"instability":1,"afferentCoupling":0,"efferentCoupling":6,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":2,"cyclomaticComplexity":2,"myerInterval":"2:2","myerDistance":0,"operators":0,"lcom":1,"sysc":38.14,"rsysc":19.07,"dc":2.14,"rdc":1.07,"sc":36,"rsc":18},"max":{"filename":"..\/app\/src\/AuthAdapters\/AuthAdapterUser.php","name":"..\/app\/src\/AuthAdapters\/AuthAdapterUser.php","loc":83,"logicalLoc":22,"volume":880.77,"length":151,"vocabulary":57,"effort":9056.58,"difficulty":"10.28","time":503,"bugs":0.29,"intelligentContent":85.66,"maintainabilityIndexWithoutComment":"49.83","maintainabilityIndex":"88.48","commentWeight":38.65,"instability":1,"afferentCoupling":0,"efferentCoupling":6,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":2,"cyclomaticComplexity":2,"myerInterval":"2:2","myerDistance":0,"operators":0,"lcom":1,"sysc":38.14,"rsysc":19.07,"dc":2.14,"rdc":1.07,"sc":36,"rsc":18},"sum":{"filename":0,"name":0,"loc":83,"logicalLoc":22,"volume":880.77,"length":151,"vocabulary":57,"effort":9056.58,"difficulty":10.28,"time":503,"bugs":0.29,"intelligentContent":85.66,"maintainabilityIndexWithoutComment":49.83,"maintainabilityIndex":88.48,"commentWeight":38.65,"instability":1,"afferentCoupling":0,"efferentCoupling":6,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":2,"cyclomaticComplexity":2,"myerInterval":2,"myerDistance":0,"operators":0,"lcom":1,"sysc":38.14,"rsysc":19.07,"dc":2.14,"rdc":1.07,"sc":36,"rsc":18}},{"name":"..\/app\/src\/Controller","childs":[{"filename":"..\/app\/src\/Controller\/AbstractController.php","name":"..\/app\/src\/Controller\/AbstractController.php","loc":54,"logicalLoc":13,"volume":318.95,"length":65,"vocabulary":30,"effort":932.31,"difficulty":"2.92","time":52,"bugs":0.11,"intelligentContent":109.11,"maintainabilityIndexWithoutComment":"58.03","maintainabilityIndex":"101.5","commentWeight":43.47,"instability":0.17,"afferentCoupling":5,"efferentCoupling":1,"noc":1,"noca":1,"nocc":0,"noc-anon":0,"noi":0,"nom":1,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":1,"sysc":1.5,"rsysc":1.5,"dc":0.5,"rdc":0.5,"sc":1,"rsc":1},{"filename":"..\/app\/src\/Controller\/AtividadeController.php","name":"..\/app\/src\/Controller\/AtividadeController.php","loc":74,"logicalLoc":16,"volume":796.32,"length":145,"vocabulary":45,"effort":6601.06,"difficulty":"8.29","time":367,"bugs":0.27,"intelligentContent":96.06,"maintainabilityIndexWithoutComment":"53.29","maintainabilityIndex":"94.53","commentWeight":41.24,"instability":1,"afferentCoupling":0,"efferentCoupling":8,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":4,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":2,"sysc":40.43,"rsysc":10.11,"dc":2.43,"rdc":0.61,"sc":38,"rsc":9.5},{"filename":"..\/app\/src\/Controller\/HomeController.php","name":"..\/app\/src\/Controller\/HomeController.php","loc":40,"logicalLoc":6,"volume":199.71,"length":42,"vocabulary":27,"effort":855.88,"difficulty":"4.29","time":48,"bugs":0.07,"intelligentContent":46.6,"maintainabilityIndexWithoutComment":"66.78","maintainabilityIndex":"111.24","commentWeight":44.46,"instability":1,"afferentCoupling":0,"efferentCoupling":4,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":2,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":2,"sysc":9.33,"rsysc":4.67,"dc":1.33,"rdc":0.67,"sc":8,"rsc":4},{"filename":"..\/app\/src\/Controller\/MaterialController.php","name":"..\/app\/src\/Controller\/MaterialController.php","loc":71,"logicalLoc":15,"volume":653.53,"length":119,"vocabulary":45,"effort":5228.24,"difficulty":"8","time":290,"bugs":0.22,"intelligentContent":81.69,"maintainabilityIndexWithoutComment":"54.5","maintainabilityIndex":"94.8","commentWeight":40.3,"instability":1,"afferentCoupling":0,"efferentCoupling":5,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":4,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":2,"sysc":28.83,"rsysc":7.21,"dc":2.83,"rdc":0.71,"sc":26,"rsc":6.5},{"filename":"..\/app\/src\/Controller\/PessoaController.php","name":"..\/app\/src\/Controller\/PessoaController.php","loc":78,"logicalLoc":15,"volume":653.53,"length":119,"vocabulary":45,"effort":5228.24,"difficulty":"8","time":290,"bugs":0.22,"intelligentContent":81.69,"maintainabilityIndexWithoutComment":"54.5","maintainabilityIndex":"97.18","commentWeight":42.68,"instability":1,"afferentCoupling":0,"efferentCoupling":5,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":4,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":2,"sysc":28.83,"rsysc":7.21,"dc":2.83,"rdc":0.71,"sc":26,"rsc":6.5},{"filename":"..\/app\/src\/Controller\/ProjetoController.php","name":"..\/app\/src\/Controller\/ProjetoController.php","loc":78,"logicalLoc":15,"volume":637.05,"length":116,"vocabulary":45,"effort":5027.57,"difficulty":"7.89","time":279,"bugs":0.21,"intelligentContent":80.72,"maintainabilityIndexWithoutComment":"54.58","maintainabilityIndex":"97.26","commentWeight":42.68,"instability":1,"afferentCoupling":0,"efferentCoupling":5,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":4,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":2,"sysc":28.83,"rsysc":7.21,"dc":2.83,"rdc":0.71,"sc":26,"rsc":6.5}],"depth":4,"abstractness":0.17,"instability":0.85,"average":{"filename":0,"name":0,"loc":65.83,"logicalLoc":13.33,"volume":543.18,"length":101,"vocabulary":39.5,"effort":3978.88,"difficulty":6.57,"time":221,"bugs":0.18,"intelligentContent":82.65,"maintainabilityIndexWithoutComment":56.95,"maintainabilityIndex":99.42,"commentWeight":42.47,"instability":0.86,"afferentCoupling":0.83,"efferentCoupling":4.67,"noc":1,"noca":0.17,"nocc":0.83,"noc-anon":0,"noi":0,"nom":3.17,"cyclomaticComplexity":1,"myerInterval":1,"myerDistance":0,"operators":0,"lcom":1.83,"sysc":22.96,"rsysc":6.32,"dc":2.13,"rdc":0.65,"sc":20.83,"rsc":5.67},"min":{"filename":"..\/app\/src\/Controller\/AbstractController.php","name":"..\/app\/src\/Controller\/AbstractController.php","loc":40,"logicalLoc":6,"volume":199.71,"length":42,"vocabulary":27,"effort":855.88,"difficulty":"2.92","time":48,"bugs":0.07,"intelligentContent":46.6,"maintainabilityIndexWithoutComment":"53.29","maintainabilityIndex":"94.53","commentWeight":40.3,"instability":0.17,"afferentCoupling":0,"efferentCoupling":1,"noc":1,"noca":0,"nocc":0,"noc-anon":0,"noi":0,"nom":1,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":1,"sysc":1.5,"rsysc":1.5,"dc":0.5,"rdc":0.5,"sc":1,"rsc":1},"max":{"filename":"..\/app\/src\/Controller\/ProjetoController.php","name":"..\/app\/src\/Controller\/ProjetoController.php","loc":78,"logicalLoc":16,"volume":796.32,"length":145,"vocabulary":45,"effort":6601.06,"difficulty":"8.29","time":367,"bugs":0.27,"intelligentContent":109.11,"maintainabilityIndexWithoutComment":"66.78","maintainabilityIndex":"111.24","commentWeight":44.46,"instability":1,"afferentCoupling":5,"efferentCoupling":8,"noc":1,"noca":1,"nocc":1,"noc-anon":0,"noi":0,"nom":4,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":2,"sysc":40.43,"rsysc":10.11,"dc":2.83,"rdc":0.71,"sc":38,"rsc":9.5},"sum":{"filename":0,"name":0,"loc":395,"logicalLoc":80,"volume":3259.09,"length":606,"vocabulary":237,"effort":23873.3,"difficulty":39.39,"time":1326,"bugs":1.1,"intelligentContent":495.87,"maintainabilityIndexWithoutComment":341.68,"maintainabilityIndex":596.51,"commentWeight":254.83,"instability":5.17,"afferentCoupling":5,"efferentCoupling":28,"noc":6,"noca":1,"nocc":5,"noc-anon":0,"noi":0,"nom":19,"cyclomaticComplexity":6,"myerInterval":6,"myerDistance":0,"operators":0,"lcom":11,"sysc":137.75,"rsysc":37.91,"dc":12.75,"rdc":3.91,"sc":125,"rsc":34}},{"name":"..\/app\/src\/Facilitator","childs":[],"depth":4,"abstractness":0,"instability":0.91,"average":{"filename":0,"name":0,"loc":55.8,"logicalLoc":18.2,"volume":687.95,"length":127.6,"vocabulary":38,"effort":8076.83,"difficulty":11.17,"time":448.8,"bugs":0.23,"intelligentContent":62.79,"maintainabilityIndexWithoutComment":53.91,"maintainabilityIndex":89.23,"commentWeight":35.32,"instability":0.92,"afferentCoupling":0.4,"efferentCoupling":4,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":2,"cyclomaticComplexity":2.6,"myerInterval":2.6,"myerDistance":0.4,"operators":0.4,"lcom":2,"sysc":17.33,"rsysc":13.06,"dc":1.33,"rdc":0.52,"sc":16,"rsc":12.53},"min":{"filename":"..\/app\/src\/Facilitator\/App\/ContainerFacilitator.php","name":"..\/app\/src\/Facilitator\/App\/ContainerFacilitator.php","loc":32,"logicalLoc":7,"volume":182.66,"length":43,"vocabulary":19,"effort":1890.54,"difficulty":"8.35","time":105,"bugs":0.06,"intelligentContent":17.65,"maintainabilityIndexWithoutComment":"45.31","maintainabilityIndex":"76.27","commentWeight":30.96,"instability":0.75,"afferentCoupling":0,"efferentCoupling":2,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":1,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":1,"sysc":9,"rsysc":3.5,"dc":0.14,"rdc":0.14,"sc":6,"rsc":2},"max":{"filename":"..\/app\/src\/Facilitator\/Database\/Drivers\/DoctrineORM.php","name":"..\/app\/src\/Facilitator\/Database\/Drivers\/DoctrineORM.php","loc":70,"logicalLoc":31,"volume":1224.32,"length":209,"vocabulary":58,"effort":18038.29,"difficulty":"14.73","time":1002,"bugs":0.41,"intelligentContent":110.07,"maintainabilityIndexWithoutComment":"65.46","maintainabilityIndex":"104.88","commentWeight":39.42,"instability":1,"afferentCoupling":1,"efferentCoupling":6,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":3,"cyclomaticComplexity":5,"myerInterval":"5:6","myerDistance":1,"operators":1,"lcom":3,"sysc":36.14,"rsysc":36.14,"dc":4.5,"rdc":1.5,"sc":36,"rsc":36},"sum":{"filename":0,"name":0,"loc":279,"logicalLoc":91,"volume":3439.76,"length":638,"vocabulary":190,"effort":40384.17,"difficulty":55.84,"time":2244,"bugs":1.15,"intelligentContent":313.96,"maintainabilityIndexWithoutComment":269.55,"maintainabilityIndex":446.17,"commentWeight":176.62,"instability":4.58,"afferentCoupling":2,"efferentCoupling":20,"noc":5,"noca":0,"nocc":5,"noc-anon":0,"noi":0,"nom":10,"cyclomaticComplexity":13,"myerInterval":13,"myerDistance":2,"operators":2,"lcom":10,"sysc":86.67,"rsysc":65.28,"dc":6.67,"rdc":2.62,"sc":80,"rsc":62.67}},{"name":"..\/app\/src\/Facilitator\/App","childs":[{"filename":"..\/app\/src\/Facilitator\/App\/ContainerFacilitator.php","name":"..\/app\/src\/Facilitator\/App\/ContainerFacilitator.php","loc":32,"logicalLoc":7,"volume":182.66,"length":43,"vocabulary":19,"effort":1890.54,"difficulty":"10.35","time":105,"bugs":0.06,"intelligentContent":17.65,"maintainabilityIndexWithoutComment":"65.46","maintainabilityIndex":"104.88","commentWeight":39.42,"instability":0.75,"afferentCoupling":1,"efferentCoupling":3,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":2,"cyclomaticComplexity":2,"myerInterval":"2:2","myerDistance":0,"operators":0,"lcom":2,"sysc":9,"rsysc":4.5,"dc":1,"rdc":0.5,"sc":8,"rsc":4},{"filename":"..\/app\/src\/Facilitator\/App\/JWTFacilitator.php","name":"..\/app\/src\/Facilitator\/App\/JWTFacilitator.php","loc":56,"logicalLoc":14,"volume":499.4,"length":99,"vocabulary":33,"effort":4168.03,"difficulty":"8.35","time":232,"bugs":0.17,"intelligentContent":59.84,"maintainabilityIndexWithoutComment":"55.97","maintainabilityIndex":"94.45","commentWeight":38.48,"instability":1,"afferentCoupling":0,"efferentCoupling":2,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":3,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":3,"sysc":10.5,"rsysc":3.5,"dc":4.5,"rdc":1.5,"sc":6,"rsc":2}],"depth":5,"abstractness":0,"instability":0.83,"average":{"filename":0,"name":0,"loc":44,"logicalLoc":10.5,"volume":341.03,"length":71,"vocabulary":26,"effort":3029.29,"difficulty":9.35,"time":168.5,"bugs":0.12,"intelligentContent":38.75,"maintainabilityIndexWithoutComment":60.72,"maintainabilityIndex":99.67,"commentWeight":38.95,"instability":0.88,"afferentCoupling":0.5,"efferentCoupling":2.5,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":2.5,"cyclomaticComplexity":1.5,"myerInterval":1.5,"myerDistance":0,"operators":0,"lcom":2.5,"sysc":9.75,"rsysc":4,"dc":2.75,"rdc":1,"sc":7,"rsc":3},"min":{"filename":"..\/app\/src\/Facilitator\/App\/ContainerFacilitator.php","name":"..\/app\/src\/Facilitator\/App\/ContainerFacilitator.php","loc":32,"logicalLoc":7,"volume":182.66,"length":43,"vocabulary":19,"effort":1890.54,"difficulty":"8.35","time":105,"bugs":0.06,"intelligentContent":17.65,"maintainabilityIndexWithoutComment":"55.97","maintainabilityIndex":"94.45","commentWeight":38.48,"instability":0.75,"afferentCoupling":0,"efferentCoupling":2,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":2,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":2,"sysc":9,"rsysc":3.5,"dc":1,"rdc":0.5,"sc":6,"rsc":2},"max":{"filename":"..\/app\/src\/Facilitator\/App\/JWTFacilitator.php","name":"..\/app\/src\/Facilitator\/App\/JWTFacilitator.php","loc":56,"logicalLoc":14,"volume":499.4,"length":99,"vocabulary":33,"effort":4168.03,"difficulty":"10.35","time":232,"bugs":0.17,"intelligentContent":59.84,"maintainabilityIndexWithoutComment":"65.46","maintainabilityIndex":"104.88","commentWeight":39.42,"instability":1,"afferentCoupling":1,"efferentCoupling":3,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":3,"cyclomaticComplexity":2,"myerInterval":"2:2","myerDistance":0,"operators":0,"lcom":3,"sysc":10.5,"rsysc":4.5,"dc":4.5,"rdc":1.5,"sc":8,"rsc":4},"sum":{"filename":0,"name":0,"loc":88,"logicalLoc":21,"volume":682.06,"length":142,"vocabulary":52,"effort":6058.57,"difficulty":18.7,"time":337,"bugs":0.23,"intelligentContent":77.49,"maintainabilityIndexWithoutComment":121.43,"maintainabilityIndex":199.33,"commentWeight":77.9,"instability":1.75,"afferentCoupling":1,"efferentCoupling":5,"noc":2,"noca":0,"nocc":2,"noc-anon":0,"noi":0,"nom":5,"cyclomaticComplexity":3,"myerInterval":3,"myerDistance":0,"operators":0,"lcom":5,"sysc":19.5,"rsysc":8,"dc":5.5,"rdc":2,"sc":14,"rsc":6}},{"name":"..\/app\/src\/Facilitator\/Database","childs":[{"filename":"..\/app\/src\/Facilitator\/Database\/DatabaseFacilitator.php","name":"..\/app\/src\/Facilitator\/Database\/DatabaseFacilitator.php","loc":61,"logicalLoc":17,"volume":605.26,"length":118,"vocabulary":35,"effort":8460.97,"difficulty":"13.98","time":470,"bugs":0.2,"intelligentContent":43.3,"maintainabilityIndexWithoutComment":"53.01","maintainabilityIndex":"85.8","commentWeight":32.79,"instability":0.83,"afferentCoupling":1,"efferentCoupling":5,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":3,"cyclomaticComplexity":5,"myerInterval":"5:6","myerDistance":1,"operators":1,"lcom":3,"sysc":14.83,"rsysc":4.94,"dc":0.83,"rdc":0.28,"sc":14,"rsc":4.67}],"depth":5,"abstractness":0,"instability":0.94,"average":{"filename":0,"name":0,"loc":63.67,"logicalLoc":23.33,"volume":919.23,"length":165.33,"vocabulary":46,"effort":11441.87,"difficulty":12.38,"time":635.67,"bugs":0.31,"intelligentContent":78.82,"maintainabilityIndexWithoutComment":49.37,"maintainabilityIndex":82.28,"commentWeight":32.91,"instability":0.94,"afferentCoupling":0.33,"efferentCoupling":5,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":1.67,"cyclomaticComplexity":3.33,"myerInterval":3.33,"myerDistance":0.67,"operators":0.67,"lcom":1.67,"sysc":22.39,"rsysc":19.09,"dc":0.39,"rdc":0.21,"sc":22,"rsc":18.89},"min":{"filename":"..\/app\/src\/Facilitator\/Database\/DatabaseFacilitator.php","name":"..\/app\/src\/Facilitator\/Database\/DatabaseFacilitator.php","loc":60,"logicalLoc":17,"volume":605.26,"length":118,"vocabulary":35,"effort":7826.34,"difficulty":"8.43","time":435,"bugs":0.2,"intelligentContent":43.3,"maintainabilityIndexWithoutComment":"45.31","maintainabilityIndex":"76.27","commentWeight":30.96,"instability":0.83,"afferentCoupling":0,"efferentCoupling":4,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":1,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":1,"sysc":14.83,"rsysc":4.94,"dc":0.14,"rdc":0.14,"sc":14,"rsc":4.67},"max":{"filename":"..\/app\/src\/Facilitator\/Database\/Drivers\/DoctrineORM.php","name":"..\/app\/src\/Facilitator\/Database\/Drivers\/DoctrineORM.php","loc":70,"logicalLoc":31,"volume":1224.32,"length":209,"vocabulary":58,"effort":18038.29,"difficulty":"14.73","time":1002,"bugs":0.41,"intelligentContent":110.07,"maintainabilityIndexWithoutComment":"53.01","maintainabilityIndex":"85.8","commentWeight":34.97,"instability":1,"afferentCoupling":1,"efferentCoupling":6,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":3,"cyclomaticComplexity":5,"myerInterval":"5:6","myerDistance":1,"operators":1,"lcom":3,"sysc":36.14,"rsysc":36.14,"dc":0.83,"rdc":0.28,"sc":36,"rsc":36},"sum":{"filename":0,"name":0,"loc":191,"logicalLoc":70,"volume":2757.7,"length":496,"vocabulary":138,"effort":34325.6,"difficulty":37.14,"time":1907,"bugs":0.92,"intelligentContent":236.47,"maintainabilityIndexWithoutComment":148.12,"maintainabilityIndex":246.84,"commentWeight":98.72,"instability":2.83,"afferentCoupling":1,"efferentCoupling":15,"noc":3,"noca":0,"nocc":3,"noc-anon":0,"noi":0,"nom":5,"cyclomaticComplexity":10,"myerInterval":10,"myerDistance":2,"operators":2,"lcom":5,"sysc":67.17,"rsysc":57.28,"dc":1.17,"rdc":0.62,"sc":66,"rsc":56.67}},{"name":"..\/app\/src\/Facilitator\/Database\/Drivers","childs":[{"filename":"..\/app\/src\/Facilitator\/Database\/Drivers\/DoctrineODM.php","name":"..\/app\/src\/Facilitator\/Database\/Drivers\/DoctrineODM.php","loc":70,"logicalLoc":31,"volume":1224.32,"length":209,"vocabulary":58,"effort":18038.29,"difficulty":"14.73","time":1002,"bugs":0.41,"intelligentContent":83.1,"maintainabilityIndexWithoutComment":"45.31","maintainabilityIndex":"76.27","commentWeight":30.96,"instability":1,"afferentCoupling":0,"efferentCoupling":6,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":1,"cyclomaticComplexity":4,"myerInterval":"4:5","myerDistance":1,"operators":1,"lcom":1,"sysc":36.14,"rsysc":36.14,"dc":0.14,"rdc":0.14,"sc":36,"rsc":36},{"filename":"..\/app\/src\/Facilitator\/Database\/Drivers\/DoctrineORM.php","name":"..\/app\/src\/Facilitator\/Database\/Drivers\/DoctrineORM.php","loc":60,"logicalLoc":22,"volume":928.12,"length":169,"vocabulary":45,"effort":7826.34,"difficulty":"8.43","time":435,"bugs":0.31,"intelligentContent":110.07,"maintainabilityIndexWithoutComment":"49.8","maintainabilityIndex":"84.77","commentWeight":34.97,"instability":1,"afferentCoupling":0,"efferentCoupling":4,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":1,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":1,"sysc":16.2,"rsysc":16.2,"dc":0.2,"rdc":0.2,"sc":16,"rsc":16}],"depth":6,"abstractness":0,"instability":1,"average":{"filename":0,"name":0,"loc":65,"logicalLoc":26.5,"volume":1076.22,"length":189,"vocabulary":51.5,"effort":12932.32,"difficulty":11.58,"time":718.5,"bugs":0.36,"intelligentContent":96.59,"maintainabilityIndexWithoutComment":47.56,"maintainabilityIndex":80.52,"commentWeight":32.97,"instability":1,"afferentCoupling":0,"efferentCoupling":5,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":1,"cyclomaticComplexity":2.5,"myerInterval":2.5,"myerDistance":0.5,"operators":0.5,"lcom":1,"sysc":26.17,"rsysc":26.17,"dc":0.17,"rdc":0.17,"sc":26,"rsc":26},"min":{"filename":"..\/app\/src\/Facilitator\/Database\/Drivers\/DoctrineODM.php","name":"..\/app\/src\/Facilitator\/Database\/Drivers\/DoctrineODM.php","loc":60,"logicalLoc":22,"volume":928.12,"length":169,"vocabulary":45,"effort":7826.34,"difficulty":"8.43","time":435,"bugs":0.31,"intelligentContent":83.1,"maintainabilityIndexWithoutComment":"45.31","maintainabilityIndex":"76.27","commentWeight":30.96,"instability":1,"afferentCoupling":0,"efferentCoupling":4,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":1,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":1,"sysc":16.2,"rsysc":16.2,"dc":0.14,"rdc":0.14,"sc":16,"rsc":16},"max":{"filename":"..\/app\/src\/Facilitator\/Database\/Drivers\/DoctrineORM.php","name":"..\/app\/src\/Facilitator\/Database\/Drivers\/DoctrineORM.php","loc":70,"logicalLoc":31,"volume":1224.32,"length":209,"vocabulary":58,"effort":18038.29,"difficulty":"14.73","time":1002,"bugs":0.41,"intelligentContent":110.07,"maintainabilityIndexWithoutComment":"49.8","maintainabilityIndex":"84.77","commentWeight":34.97,"instability":1,"afferentCoupling":0,"efferentCoupling":6,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":1,"cyclomaticComplexity":4,"myerInterval":"4:5","myerDistance":1,"operators":1,"lcom":1,"sysc":36.14,"rsysc":36.14,"dc":0.2,"rdc":0.2,"sc":36,"rsc":36},"sum":{"filename":0,"name":0,"loc":130,"logicalLoc":53,"volume":2152.44,"length":378,"vocabulary":103,"effort":25864.63,"difficulty":23.16,"time":1437,"bugs":0.72,"intelligentContent":193.17,"maintainabilityIndexWithoutComment":95.11,"maintainabilityIndex":161.04,"commentWeight":65.93,"instability":2,"afferentCoupling":0,"efferentCoupling":10,"noc":2,"noca":0,"nocc":2,"noc-anon":0,"noi":0,"nom":2,"cyclomaticComplexity":5,"myerInterval":5,"myerDistance":1,"operators":1,"lcom":2,"sysc":52.34,"rsysc":52.34,"dc":0.34,"rdc":0.34,"sc":52,"rsc":52}},{"name":"..\/app\/src\/Mapper","childs":[{"filename":"..\/app\/src\/Mapper\/Atividade.php","name":"..\/app\/src\/Mapper\/Atividade.php","loc":197,"logicalLoc":27,"volume":919.24,"length":159,"vocabulary":55,"effort":5402.86,"difficulty":"5.88","time":300,"bugs":0.31,"intelligentContent":156.4,"maintainabilityIndexWithoutComment":"47.89","maintainabilityIndex":"91.89","commentWeight":44,"instability":0.63,"afferentCoupling":3,"efferentCoupling":5,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":15,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":1,"sysc":17,"rsysc":1.13,"dc":12,"rdc":0.8,"sc":5,"rsc":0.33},{"filename":"..\/app\/src\/Mapper\/DetalhamentoAtividade.php","name":"..\/app\/src\/Mapper\/DetalhamentoAtividade.php","loc":115,"logicalLoc":14,"volume":421.11,"length":85,"vocabulary":31,"effort":2065.04,"difficulty":"4.9","time":115,"bugs":0.14,"intelligentContent":85.87,"maintainabilityIndexWithoutComment":"56.49","maintainabilityIndex":"101.05","commentWeight":44.56,"instability":0.5,"afferentCoupling":2,"efferentCoupling":2,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":8,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":0,"sysc":10,"rsysc":1.25,"dc":6,"rdc":0.75,"sc":4,"rsc":0.5},{"filename":"..\/app\/src\/Mapper\/Material.php","name":"..\/app\/src\/Mapper\/Material.php","loc":118,"logicalLoc":17,"volume":549.68,"length":104,"vocabulary":39,"effort":3148.18,"difficulty":"5.73","time":175,"bugs":0.18,"intelligentContent":95.98,"maintainabilityIndexWithoutComment":"53.84","maintainabilityIndex":"97.16","commentWeight":43.32,"instability":0.75,"afferentCoupling":1,"efferentCoupling":3,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":9,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":1,"sysc":10,"rsysc":1.11,"dc":7,"rdc":0.78,"sc":3,"rsc":0.33},{"filename":"..\/app\/src\/Mapper\/Pessoa.php","name":"..\/app\/src\/Mapper\/Pessoa.php","loc":119,"logicalLoc":17,"volume":535.29,"length":102,"vocabulary":38,"effort":3111.37,"difficulty":"5.81","time":173,"bugs":0.18,"intelligentContent":92.09,"maintainabilityIndexWithoutComment":"53.92","maintainabilityIndex":"97.37","commentWeight":43.45,"instability":0.67,"afferentCoupling":1,"efferentCoupling":2,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":9,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":1,"sysc":9.5,"rsysc":1.06,"dc":7.5,"rdc":0.83,"sc":2,"rsc":0.22},{"filename":"..\/app\/src\/Mapper\/Projeto.php","name":"..\/app\/src\/Mapper\/Projeto.php","loc":97,"logicalLoc":14,"volume":422.26,"length":83,"vocabulary":34,"effort":2307.35,"difficulty":"5.46","time":128,"bugs":0.14,"intelligentContent":77.28,"maintainabilityIndexWithoutComment":"56.48","maintainabilityIndex":"99.69","commentWeight":43.21,"instability":0.67,"afferentCoupling":1,"efferentCoupling":2,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":7,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":1,"sysc":7.5,"rsysc":1.07,"dc":5.5,"rdc":0.79,"sc":2,"rsc":0.29}],"depth":4,"abstractness":0.15,"instability":0.7,"average":{"filename":0,"name":0,"loc":71.69,"logicalLoc":10.85,"volume":343.98,"length":68.15,"vocabulary":27.69,"effort":1756.58,"difficulty":4.07,"time":97.62,"bugs":0.11,"intelligentContent":80.41,"maintainabilityIndexWithoutComment":62.81,"maintainabilityIndex":104.33,"commentWeight":41.53,"instability":0.56,"afferentCoupling":0.62,"efferentCoupling":1.46,"noc":1,"noca":0.15,"nocc":0.85,"noc-anon":0,"noi":0.15,"nom":5,"cyclomaticComplexity":1.38,"myerInterval":1.38,"myerDistance":0,"operators":0,"lcom":0.77,"sysc":6.13,"rsysc":1.5,"dc":4.36,"rdc":0.94,"sc":1.77,"rsc":0.56},"min":{"filename":"..\/app\/src\/Mapper\/Atividade.php","name":"..\/app\/src\/Mapper\/Atividade.php","loc":15,"logicalLoc":2,"volume":22.46,"length":8,"vocabulary":7,"effort":11.23,"difficulty":"0.5","time":1,"bugs":0.01,"intelligentContent":26.69,"maintainabilityIndexWithoutComment":"47.89","maintainabilityIndex":"91.89","commentWeight":35.68,"instability":0,"afferentCoupling":0,"efferentCoupling":0,"noc":1,"noca":0,"nocc":0,"noc-anon":0,"noi":0,"nom":1,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":0,"sysc":1,"rsysc":1,"dc":0.67,"rdc":0.67,"sc":0,"rsc":0},"max":{"filename":"..\/app\/src\/Mapper\/Validator\/ValidatorInterface.php","name":"..\/app\/src\/Mapper\/Validator\/ValidatorInterface.php","loc":197,"logicalLoc":27,"volume":919.24,"length":159,"vocabulary":55,"effort":5402.86,"difficulty":"6.89","time":300,"bugs":0.31,"intelligentContent":156.4,"maintainabilityIndexWithoutComment":"83.84","maintainabilityIndex":"129.09","commentWeight":46.06,"instability":1,"afferentCoupling":3,"efferentCoupling":5,"noc":1,"noca":1,"nocc":1,"noc-anon":0,"noi":1,"nom":15,"cyclomaticComplexity":5,"myerInterval":"5:5","myerDistance":0,"operators":0,"lcom":1,"sysc":17,"rsysc":4.67,"dc":12,"rdc":1.33,"sc":5,"rsc":4},"sum":{"filename":0,"name":0,"loc":932,"logicalLoc":141,"volume":4471.77,"length":886,"vocabulary":360,"effort":22835.51,"difficulty":52.89,"time":1269,"bugs":1.48,"intelligentContent":1045.39,"maintainabilityIndexWithoutComment":816.47,"maintainabilityIndex":1356.35,"commentWeight":539.88,"instability":7.22,"afferentCoupling":8,"efferentCoupling":19,"noc":13,"noca":2,"nocc":11,"noc-anon":0,"noi":2,"nom":65,"cyclomaticComplexity":18,"myerInterval":18,"myerDistance":0,"operators":0,"lcom":10,"sysc":79.67,"rsysc":19.5,"dc":56.67,"rdc":12.25,"sc":23,"rsc":7.25}},{"name":"..\/app\/src\/Mapper\/Repository","childs":[{"filename":"..\/app\/src\/Mapper\/Repository\/AtividadeRepository.php","name":"..\/app\/src\/Mapper\/Repository\/AtividadeRepository.php","loc":46,"logicalLoc":10,"volume":343.48,"length":70,"vocabulary":30,"effort":1511.32,"difficulty":"4.4","time":84,"bugs":0.11,"intelligentContent":78.06,"maintainabilityIndexWithoutComment":"60.3","maintainabilityIndex":"98.02","commentWeight":37.72,"instability":1,"afferentCoupling":0,"efferentCoupling":1,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":3,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":1,"sysc":4.5,"rsysc":1.5,"dc":3.5,"rdc":1.17,"sc":1,"rsc":0.33},{"filename":"..\/app\/src\/Mapper\/Repository\/MaterialRepository.php","name":"..\/app\/src\/Mapper\/Repository\/MaterialRepository.php","loc":57,"logicalLoc":12,"volume":420,"length":84,"vocabulary":32,"effort":2022.22,"difficulty":"4.81","time":112,"bugs":0.14,"intelligentContent":87.23,"maintainabilityIndexWithoutComment":"57.96","maintainabilityIndex":"93.64","commentWeight":35.68,"instability":1,"afferentCoupling":0,"efferentCoupling":1,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":4,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":1,"sysc":5.5,"rsysc":1.38,"dc":4.5,"rdc":1.13,"sc":1,"rsc":0.25},{"filename":"..\/app\/src\/Mapper\/Repository\/PersistInterface.php","name":"..\/app\/src\/Mapper\/Repository\/PersistInterface.php","loc":21,"logicalLoc":3,"volume":33,"length":11,"vocabulary":8,"effort":18.86,"difficulty":"0.57","time":1,"bugs":0.01,"intelligentContent":57.75,"maintainabilityIndexWithoutComment":"78.82","maintainabilityIndex":"124.88","commentWeight":46.06,"instability":0,"afferentCoupling":0,"efferentCoupling":0,"noc":1,"noca":1,"nocc":0,"noc-anon":0,"noi":1,"nom":2,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":0,"sysc":2,"rsysc":1,"dc":2,"rdc":1,"sc":0,"rsc":0},{"filename":"..\/app\/src\/Mapper\/Repository\/PessoaRepository.php","name":"..\/app\/src\/Mapper\/Repository\/PessoaRepository.php","loc":44,"logicalLoc":7,"volume":252.17,"length":55,"vocabulary":24,"effort":630.43,"difficulty":"2.5","time":35,"bugs":0.08,"intelligentContent":100.87,"maintainabilityIndexWithoutComment":"64.61","maintainabilityIndex":"102.95","commentWeight":38.34,"instability":0,"afferentCoupling":0,"efferentCoupling":0,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":3,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":1,"sysc":4,"rsysc":1.33,"dc":4,"rdc":1.33,"sc":0,"rsc":0},{"filename":"..\/app\/src\/Mapper\/Repository\/ProjetoRepository.php","name":"..\/app\/src\/Mapper\/Repository\/ProjetoRepository.php","loc":30,"logicalLoc":6,"volume":170.97,"length":41,"vocabulary":18,"effort":288.51,"difficulty":"1.69","time":16,"bugs":0.06,"intelligentContent":101.31,"maintainabilityIndexWithoutComment":"67.26","maintainabilityIndex":"106.25","commentWeight":38.99,"instability":0,"afferentCoupling":0,"efferentCoupling":0,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":2,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":1,"sysc":2,"rsysc":1,"dc":2,"rdc":1,"sc":0,"rsc":0}],"depth":5,"abstractness":0.2,"instability":1,"average":{"filename":0,"name":0,"loc":39.6,"logicalLoc":7.6,"volume":243.92,"length":52.2,"vocabulary":22.4,"effort":894.27,"difficulty":2.79,"time":49.6,"bugs":0.08,"intelligentContent":85.04,"maintainabilityIndexWithoutComment":65.79,"maintainabilityIndex":105.15,"commentWeight":39.36,"instability":0.4,"afferentCoupling":0,"efferentCoupling":0.4,"noc":1,"noca":0.2,"nocc":0.8,"noc-anon":0,"noi":0.2,"nom":2.8,"cyclomaticComplexity":1,"myerInterval":1,"myerDistance":0,"operators":0,"lcom":0.8,"sysc":3.6,"rsysc":1.24,"dc":3.2,"rdc":1.13,"sc":0.4,"rsc":0.12},"min":{"filename":"..\/app\/src\/Mapper\/Repository\/AtividadeRepository.php","name":"..\/app\/src\/Mapper\/Repository\/AtividadeRepository.php","loc":21,"logicalLoc":3,"volume":33,"length":11,"vocabulary":8,"effort":18.86,"difficulty":"0.57","time":1,"bugs":0.01,"intelligentContent":57.75,"maintainabilityIndexWithoutComment":"57.96","maintainabilityIndex":"93.64","commentWeight":35.68,"instability":0,"afferentCoupling":0,"efferentCoupling":0,"noc":1,"noca":0,"nocc":0,"noc-anon":0,"noi":0,"nom":2,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":0,"sysc":2,"rsysc":1,"dc":2,"rdc":1,"sc":0,"rsc":0},"max":{"filename":"..\/app\/src\/Mapper\/Repository\/ProjetoRepository.php","name":"..\/app\/src\/Mapper\/Repository\/ProjetoRepository.php","loc":57,"logicalLoc":12,"volume":420,"length":84,"vocabulary":32,"effort":2022.22,"difficulty":"4.81","time":112,"bugs":0.14,"intelligentContent":101.31,"maintainabilityIndexWithoutComment":"78.82","maintainabilityIndex":"124.88","commentWeight":46.06,"instability":1,"afferentCoupling":0,"efferentCoupling":1,"noc":1,"noca":1,"nocc":1,"noc-anon":0,"noi":1,"nom":4,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":1,"sysc":5.5,"rsysc":1.5,"dc":4.5,"rdc":1.33,"sc":1,"rsc":0.33},"sum":{"filename":0,"name":0,"loc":198,"logicalLoc":38,"volume":1219.62,"length":261,"vocabulary":112,"effort":4471.34,"difficulty":13.97,"time":248,"bugs":0.4,"intelligentContent":425.22,"maintainabilityIndexWithoutComment":328.95,"maintainabilityIndex":525.74,"commentWeight":196.79,"instability":2,"afferentCoupling":0,"efferentCoupling":2,"noc":5,"noca":1,"nocc":4,"noc-anon":0,"noi":1,"nom":14,"cyclomaticComplexity":5,"myerInterval":5,"myerDistance":0,"operators":0,"lcom":4,"sysc":18,"rsysc":6.21,"dc":16,"rdc":5.63,"sc":2,"rsc":0.58}},{"name":"..\/app\/src\/Mapper\/Validator","childs":[{"filename":"..\/app\/src\/Mapper\/Validator\/AtividadeValidator.php","name":"..\/app\/src\/Mapper\/Validator\/AtividadeValidator.php","loc":45,"logicalLoc":8,"volume":282.03,"length":60,"vocabulary":26,"effort":1942.85,"difficulty":"6.89","time":108,"bugs":0.09,"intelligentContent":40.94,"maintainabilityIndexWithoutComment":"62.47","maintainabilityIndex":"100.5","commentWeight":38.03,"instability":1,"afferentCoupling":0,"efferentCoupling":2,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":1,"cyclomaticComplexity":5,"myerInterval":"5:5","myerDistance":0,"operators":0,"lcom":1,"sysc":4.67,"rsysc":4.67,"dc":0.67,"rdc":0.67,"sc":4,"rsc":4},{"filename":"..\/app\/src\/Mapper\/Validator\/MaterialValidator.php","name":"..\/app\/src\/Mapper\/Validator\/MaterialValidator.php","loc":28,"logicalLoc":4,"volume":100.08,"length":24,"vocabulary":18,"effort":375.29,"difficulty":"3.75","time":21,"bugs":0.03,"intelligentContent":26.69,"maintainabilityIndexWithoutComment":"72.59","maintainabilityIndex":"113.86","commentWeight":41.27,"instability":1,"afferentCoupling":0,"efferentCoupling":1,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":1,"cyclomaticComplexity":2,"myerInterval":"2:2","myerDistance":0,"operators":0,"lcom":1,"sysc":2,"rsysc":2,"dc":1,"rdc":1,"sc":1,"rsc":1},{"filename":"..\/app\/src\/Mapper\/Validator\/ValidatorInterface.php","name":"..\/app\/src\/Mapper\/Validator\/ValidatorInterface.php","loc":15,"logicalLoc":2,"volume":22.46,"length":8,"vocabulary":7,"effort":11.23,"difficulty":"0.5","time":1,"bugs":0.01,"intelligentContent":44.92,"maintainabilityIndexWithoutComment":"83.84","maintainabilityIndex":"129.09","commentWeight":45.25,"instability":0,"afferentCoupling":0,"efferentCoupling":0,"noc":1,"noca":1,"nocc":0,"noc-anon":0,"noi":1,"nom":1,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":0,"sysc":1,"rsysc":1,"dc":1,"rdc":1,"sc":0,"rsc":0}],"depth":5,"abstractness":0.33,"instability":1,"average":{"filename":0,"name":0,"loc":29.33,"logicalLoc":4.67,"volume":134.86,"length":30.67,"vocabulary":17,"effort":776.46,"difficulty":3.71,"time":43.33,"bugs":0.04,"intelligentContent":37.52,"maintainabilityIndexWithoutComment":72.97,"maintainabilityIndex":114.48,"commentWeight":41.52,"instability":0.67,"afferentCoupling":0,"efferentCoupling":1,"noc":1,"noca":0.33,"nocc":0.67,"noc-anon":0,"noi":0.33,"nom":1,"cyclomaticComplexity":2.67,"myerInterval":2.67,"myerDistance":0,"operators":0,"lcom":0.67,"sysc":2.56,"rsysc":2.56,"dc":0.89,"rdc":0.89,"sc":1.67,"rsc":1.67},"min":{"filename":"..\/app\/src\/Mapper\/Validator\/AtividadeValidator.php","name":"..\/app\/src\/Mapper\/Validator\/AtividadeValidator.php","loc":15,"logicalLoc":2,"volume":22.46,"length":8,"vocabulary":7,"effort":11.23,"difficulty":"0.5","time":1,"bugs":0.01,"intelligentContent":26.69,"maintainabilityIndexWithoutComment":"62.47","maintainabilityIndex":"100.5","commentWeight":38.03,"instability":0,"afferentCoupling":0,"efferentCoupling":0,"noc":1,"noca":0,"nocc":0,"noc-anon":0,"noi":0,"nom":1,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":0,"sysc":1,"rsysc":1,"dc":0.67,"rdc":0.67,"sc":0,"rsc":0},"max":{"filename":"..\/app\/src\/Mapper\/Validator\/ValidatorInterface.php","name":"..\/app\/src\/Mapper\/Validator\/ValidatorInterface.php","loc":45,"logicalLoc":8,"volume":282.03,"length":60,"vocabulary":26,"effort":1942.85,"difficulty":"6.89","time":108,"bugs":0.09,"intelligentContent":44.92,"maintainabilityIndexWithoutComment":"83.84","maintainabilityIndex":"129.09","commentWeight":45.25,"instability":1,"afferentCoupling":0,"efferentCoupling":2,"noc":1,"noca":1,"nocc":1,"noc-anon":0,"noi":1,"nom":1,"cyclomaticComplexity":5,"myerInterval":"5:5","myerDistance":0,"operators":0,"lcom":1,"sysc":4.67,"rsysc":4.67,"dc":1,"rdc":1,"sc":4,"rsc":4},"sum":{"filename":0,"name":0,"loc":88,"logicalLoc":14,"volume":404.57,"length":92,"vocabulary":51,"effort":2329.37,"difficulty":11.14,"time":130,"bugs":0.13,"intelligentContent":112.55,"maintainabilityIndexWithoutComment":218.9,"maintainabilityIndex":343.45,"commentWeight":124.55,"instability":2,"afferentCoupling":0,"efferentCoupling":3,"noc":3,"noca":1,"nocc":2,"noc-anon":0,"noi":1,"nom":3,"cyclomaticComplexity":8,"myerInterval":8,"myerDistance":0,"operators":0,"lcom":2,"sysc":7.67,"rsysc":7.67,"dc":2.67,"rdc":2.67,"sc":5,"rsc":5}},{"name":"..\/app\/src\/Middleware","childs":[{"filename":"..\/app\/src\/Middleware\/ExampleMiddleware.php","name":"..\/app\/src\/Middleware\/ExampleMiddleware.php","loc":31,"logicalLoc":7,"volume":162.63,"length":39,"vocabulary":18,"effort":604.04,"difficulty":"3.71","time":34,"bugs":0.05,"intelligentContent":43.78,"maintainabilityIndexWithoutComment":"65.95","maintainabilityIndex":"108.11","commentWeight":42.16,"instability":0,"afferentCoupling":0,"efferentCoupling":0,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":1,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":1,"sysc":4,"rsysc":4,"dc":4,"rdc":4,"sc":0,"rsc":0}],"depth":4,"abstractness":0,"instability":0,"average":{"filename":0,"name":0,"loc":31,"logicalLoc":7,"volume":162.63,"length":39,"vocabulary":18,"effort":604.04,"difficulty":3.71,"time":34,"bugs":0.05,"intelligentContent":43.78,"maintainabilityIndexWithoutComment":65.95,"maintainabilityIndex":108.11,"commentWeight":42.16,"instability":0,"afferentCoupling":0,"efferentCoupling":0,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":1,"cyclomaticComplexity":1,"myerInterval":1,"myerDistance":0,"operators":0,"lcom":1,"sysc":4,"rsysc":4,"dc":4,"rdc":4,"sc":0,"rsc":0},"min":{"filename":"..\/app\/src\/Middleware\/ExampleMiddleware.php","name":"..\/app\/src\/Middleware\/ExampleMiddleware.php","loc":31,"logicalLoc":7,"volume":162.63,"length":39,"vocabulary":18,"effort":604.04,"difficulty":"3.71","time":34,"bugs":0.05,"intelligentContent":43.78,"maintainabilityIndexWithoutComment":"65.95","maintainabilityIndex":"108.11","commentWeight":42.16,"instability":0,"afferentCoupling":0,"efferentCoupling":0,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":1,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":1,"sysc":4,"rsysc":4,"dc":4,"rdc":4,"sc":0,"rsc":0},"max":{"filename":"..\/app\/src\/Middleware\/ExampleMiddleware.php","name":"..\/app\/src\/Middleware\/ExampleMiddleware.php","loc":31,"logicalLoc":7,"volume":162.63,"length":39,"vocabulary":18,"effort":604.04,"difficulty":"3.71","time":34,"bugs":0.05,"intelligentContent":43.78,"maintainabilityIndexWithoutComment":"65.95","maintainabilityIndex":"108.11","commentWeight":42.16,"instability":0,"afferentCoupling":0,"efferentCoupling":0,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":1,"cyclomaticComplexity":1,"myerInterval":"1:1","myerDistance":0,"operators":0,"lcom":1,"sysc":4,"rsysc":4,"dc":4,"rdc":4,"sc":0,"rsc":0},"sum":{"filename":0,"name":0,"loc":31,"logicalLoc":7,"volume":162.63,"length":39,"vocabulary":18,"effort":604.04,"difficulty":3.71,"time":34,"bugs":0.05,"intelligentContent":43.78,"maintainabilityIndexWithoutComment":65.95,"maintainabilityIndex":108.11,"commentWeight":42.16,"instability":0,"afferentCoupling":0,"efferentCoupling":0,"noc":1,"noca":0,"nocc":1,"noc-anon":0,"noi":0,"nom":1,"cyclomaticComplexity":1,"myerInterval":1,"myerDistance":0,"operators":0,"lcom":1,"sysc":4,"rsysc":4,"dc":4,"rdc":4,"sc":0,"rsc":0}}]
    var ruleSet = {"cyclomaticComplexity":[10,6,2],"maintainabilityIndex":[0,69,85],"logicalLoc":[800,400,200],"volume":[1300,1000,300],"bugs":[0.35,0.25,0.15],"commentWeight":[36,38,41],"vocabulary":[51,34,27],"difficulty":[18,15,5.8],"instability":[1,0.95,0.45],"afferentCoupling":[20,15,9],"efferentCoupling":[15,11,7],"myerDistance":[10,5,2],"lcom":[3,2,1.5]}
    
    // accessibility for colorblinds
    var accessibilityEnabled = false;

    // fixes links to tab
    // Javascript to enable link to tab
//    var hash = document.location.hash;
//    var prefix = "tab_";
//    if (hash) {
//        $('#menu a[href='+hash.replace(prefix,"")+']').tab('show');
//    }
//    // Change hash for page-reload
//    $('#menu a').on('shown', function (e) {
//        window.location.hash = e.target.hash.replace("#", "#" + prefix);
//    });

</script>


</body>
</html>