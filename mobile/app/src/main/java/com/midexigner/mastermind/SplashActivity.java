package com.midexigner.mastermind;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.os.Handler;

public class SplashActivity extends AppCompatActivity {

    Handler handler;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_splash);

        handler = new Handler();
        handler.postDelayed(new Runnable() {
            @Override
            public void run() {
                Intent i = new Intent(SplashActivity.this, MainActivity.class);
//                overridePendingTransition(R.anim.slide_in_right, R.anim.slide_out_left);
//                overridePendingTransition(R.anim.fade_in, R.anim.fade_out);
                startActivity(i);
            }
        },3000);
    }
}