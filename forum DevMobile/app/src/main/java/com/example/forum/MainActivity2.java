package com.example.forum;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Context;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.widget.TextView;

public class MainActivity2 extends AppCompatActivity {

    TextView showName;
    SharedPreferences sp;
    SharedPreferences.Editor editor;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main2);

        showName = findViewById(R.id.textShowName);

        sp = getSharedPreferences(getString(R.string.nome), Context.MODE_PRIVATE);
        String result = sp.getString(getString(R.string.nome), "");
        showName.setText("Olá " + result + " Seja bem-vindo");


    }
}