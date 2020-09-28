<?php
require ("nighto2.php");
?>
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 50%;
    }
    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
<center>

<!-- Leaderboard Table -->
<h2>Toppliste</h2>
<div id="Leaderboard">
    <table id="LeaderboardTable">
        <th>Fornavn</th>
        <th>Etternavn</th>
        <th>Klubb</th>
        <th>Poeng</th>
        <?php ListLeaderboard(); ?>
    </table>
</div>

<!-- Leaderboard Women Table -->
<h2>Dameranking</h2>
<div id="LeaderboardWomen">
    <table id="LeaderboardWomenTable">
        <th>Fornavn</th>
        <th>Etternavn</th>
        <th>Klubb</th>
        <th>Poeng</th>
        <?php ListAllWomenLeaderboard(); ?>
    </table>
</div>

<!-- Leaderboard Men Table -->
<h2>Herreranking</h2>
<div id="LeaderboardMen">
    <table id="LeaderboardMenTable">
        <th>Fornavn</th>
        <th>Etternavn</th>
        <th>Klubb</th>
        <th>Poeng</th>
        <?php ListAllMenLeaderboard(); ?>
    </table>
</div>

<!-- Leaderboard Top 5 Men Table -->
<h2>Topp 5 herrer</h2>
<div id="LeaderboardTop5Men">
    <table id="LeaderboardTop5MenTable">
        <th>Fornavn</th>
        <th>Etternavn</th>
        <th>Klubb</th>
        <th>Poeng</th>
        <?php ListTop5MenLeaderboard(); ?>
    </table>
</div>

<!-- Leaderboard Top 5 Women Table -->
<h2>Topp 5 damer</h2>
<div id="LeaderboardTop5Men">
    <table id="LeaderboardTop5MenTable">
        <th>Fornavn</th>
        <th>Etternavn</th>
        <th>Klubb</th>
        <th>Poeng</th>
        <?php ListTop5WomenLeaderboard(); ?>
    </table>
</div>

<!-- All Results table -->
<h2>Her vises seneste 5 resultater</h2>
<div id="AllResults">
    <table id="AllResultsTable">
        <th>Fornavn</th>
        <th>Etternavn</th>
        <th>Fødselsår</th>
        <th>Klubb</th>
        <th>Løp 1</th>
        <th>Løp 2</th>
        <th>Løp 3</th>
        <th>Løp 4</th>
        <th>Løp 5</th>
        <th>Poeng</th>
        <?php ListAllRunnersLast5Results(); ?>
    </table>
</div>

<!-- All Results Person table -->
<h2>Her vises dine 5 seneste resultater (skal knyttes til hver løper, og collapse når trykker på sitt navn)</h2>
<div id="AllResultsPerson">
    <table id="AllResultsPersonTable">
        <th>Fornavn</th>
        <th>Etternavn</th>
        <th>Fødselsår</th>
        <th>Klubb</th>
        <th>Løp 1</th>
        <th>Løp 2</th>
        <th>Løp 3</th>
        <th>Løp 4</th>
        <th>Løp 5</th>
        <th>Poeng</th>
        <?php ListEachRunnersLast5Results(); ?>
    </table>
</div>

<!-- Runners table -->
<h2>Her vises alle løpere</h2>
<div id="Runner">
	<table id="RunnerTable">
		<th>Fornavn</th>
		<th>Etternavn</th>
        <th>Klubb</th>
		<th>Fødselsår</th>
		<?php ListAllRunners(); ?>
	</table>
</div>

<!-- Events table -->
<center><h2>Her vises alle gjennomførte nattløp</h2>

<div id="AllCompletedEvents">
	<table id="AllCompletedEventsTable">
		<th>Løpets navn</th>
		<?php ListAllCompletedEvents(); ?>
	</table>
</div>



<!-- 5 latest Events table -->
<center><h2>Her vises siste fem gjennomførte nattløp</h2>

<div id="Latest5CompletedEvents">
    <table id="Latest5CompletedEventsTable">
        <th>Løpets navn</th>
        <?php ListLatest5CompletedEvents(); ?>
    </table>
</div>

<!-- GPS Events table -->
<center><h2>Her vises GPS-koordinater til alle gjennomførte nattløp</h2>

<div id="GPScoordinates">
    <table id="GPScoordinatesEventsTable">
        <th>Koordinater</th>
        <?php GetCoordinates(); ?>
    </table>
</div>



</center>





