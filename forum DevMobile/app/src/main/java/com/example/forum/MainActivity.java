package com.example.forum;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Context;
import android.content.Intent;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

public class MainActivity extends AppCompatActivity {

    EditText text;
    Button send;
    SharedPreferences sp;
    SharedPreferences.Editor editor;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        text = findViewById(R.id.editTextName);
        send = findViewById(R.id.btn_send);

        sp = getSharedPreferences(getString(R.string.nome), Context.MODE_PRIVATE);
        String result = sp.getString(getString(R.string.nome), "");

        send.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {

                String name = text.getText().toString();

                editor = sp.edit();
                editor.putString(getString(R.string.nome), name);
                editor.apply();

                Intent screen2 = new Intent(MainActivity.this, MainActivity2.class);

                startActivity(screen2);


            }
        });
    }
}