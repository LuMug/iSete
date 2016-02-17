package com.isete.appisete;

import android.net.ConnectivityManager;
import android.net.NetworkInfo;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.webkit.WebView;
import android.webkit.WebViewClient;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        //istanza della classe ConnectivityManager, gestisce lo state della connessione
        ConnectivityManager cManager = (ConnectivityManager) getSystemService(this.CONNECTIVITY_SERVICE);
        NetworkInfo nInfo = cManager.getActiveNetworkInfo();

        //controllo che il dispositivo abbia una connessione
        if(nInfo!= null && nInfo.isConnected()){
            //informo tramite un pop-up che la connessione è disponibile
            Toast.makeText(this, "Network is available", Toast.LENGTH_LONG).show();


            //istanzio la webview
            WebView webView = (WebView)findViewById(R.id.webView);
            webView.setWebViewClient(new WebViewClient());
            //abilito javascript
            webView.getSettings().setJavaScriptEnabled(true);
            //nascondo le scrollbar
            webView.setVerticalScrollBarEnabled(false);
            webView.setHorizontalScrollBarEnabled(false);
            //Indirizzo l'app ad uno specifico sito
            //webView.loadUrl("sitoIsete");
            webView.loadUrl("http://www.google.ch/");
        }
        //se non ha una connessione do un messagio d'errore
        else{
            Toast.makeText(this,"Network is not available",Toast.LENGTH_LONG).show();
        }
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.menu_main, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        // Handle action bar item clicks here. The action bar will
        // automatically handle clicks on the Home/Up button, so long
        // as you specify a parent activity in AndroidManifest.xml.
        int id = item.getItemId();

        //noinspection SimplifiableIfStatement
        if (id == R.id.action_settings) {
            return true;
        }

        return super.onOptionsItemSelected(item);
    }
}
