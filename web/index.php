<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form test</title>
</head>
<body>
Hello
  <?php if (isset($_GET['submitted'])) { ?>
    <h1>The server had accepted:</h1>
    <p>radio: <?php echo htmlspecialchars($_GET['radio']); ?></p>
    <p>checkbox: <?php echo htmlspecialchars($_GET['checkbox']); ?></p>
  <p>select: <?php echo htmlspecialchars($_GET['select']); ?></p>
  <p>color: <?php echo htmlspecialchars($_GET['color']); ?></p>
  <p>date: <?php echo htmlspecialchars($_GET['date']); ?></p>
  <p>month: <?php echo htmlspecialchars($_GET['month']); ?></p>
    <p>Try again? <a href="/index.php">Yes!</a></p>
  <?php } ?>

  <?php if (!isset($_GET['submitted'])) { ?>
  
  <h1>Play with the HTML form</h1>
  <form action="/index.php">
    <div style="border: 2px solid red;">
      <input type="hidden" name="submitted" value="yes">
    <p>
      <label for="my-radio-yes">radio Yes: </label>
      <input id="my-radio-yes" name="radio" type="radio" required value="Yes">
      <label for="my-radio-no">radio No: </label>
      <input id="my-radio-no" name="radio" type="radio" required value="No"></p>
    <br>
    <input type="submit" value="Submit">
    <input type="reset" value="Clear">
    </div>
    <p><label for="my-checkbox">checkbox:</label>
      <input id="my-checkbox" name="my-checkbox" type="checkbox" checked></p>
    <p><label for ="my-select">select: </label><select id="my-select" name="my-select" size="1" required>
        <option value="">------------</option>
        <option value="1">Первая</option>
        <option value="2" selected>Вторая</option>
      </select>
    </p>
    <p><label for ="my-color">Цвет: </label><input id="my-color" name="my-color" type="color"></p>
    <p><label for="my-date">Дата: </label><input id="my-date" name="my-date" type="date" required></p>
    <p><label for="my-month" >Месяц: </label><input id="my-month" name="my-month" type="month" required></p>
  </form>
  </div>

  <?php } ?>

  
</body>
</html>
