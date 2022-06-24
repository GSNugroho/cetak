<!DOCTYPE html>
<html>
  <head>
    <title>Cetak</title>
  </head>
  <body>
    <table>
      <tr>
        <td>
          <label for="url">Link Url</label>
        </td>
        <td>
          <input type="text" id="url" name="url">
        </td>
      </tr>
      <tr>
        <td>
          <label for="type">Type</label>
        </td>
        <td>
          <select id="type" name="type">
            <option value="dp">DP</option>
            <option value="pln">Lunas/ Pelunasan</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>
          <button onclick="proses()">Proses</button>
        </td>
        <td>
          <div id="cetak"></div>
        </td>
      </tr>
    </table>
    <script>
      function proses(){
        var url = document.getElementById('url').value;
        var type = document.getElementById('type').value;
        var eurl = url.split('/');
        /* //////////////////////////////////////////////////// */
        var newurl = eurl[0]+'//'+eurl[2]+'/api/'+eurl[3]+'/getinv/'+type+'/'+eurl[5]+'/'+eurl[6]+'/'+eurl[7];
        var btn = '<a href="'+newurl+'" target="_blank">Cetak</a>';
        document.getElementById('cetak').innerHTML = btn;
      }
      // https://sellercenter.adilayab-ns.com/akunumum/franchise/17/2876/165597220725
    </script>
  </body>
</html>