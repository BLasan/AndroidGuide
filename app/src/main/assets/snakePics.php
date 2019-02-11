<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Android Guide</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style type="text/css">
	ul.mr-auto{
		margin-right: 0px !important;
		margin-left: auto;	}
		
.menu  {
  width: 30px;
  height: 2px;
  background-color: black;
  margin: 6px 0;
  margin-left:-2px
}

.mystyle {
  width: 100%;
  padding: 25px;
  background-color: coral;
  color: white;
  font-size: 25px;
  box-sizing: border-box;
}

.img-fluid {
  max-width: 100%;
  height: auto;
}

.dropdown-menu{
    transform: translate3d(-1px, 37px, 0px)!important;
}

.content{
	
	position:absolute;
	margin:10px;
	background-color:pink;
	
}

.blob-wrapper {
    border-bottom-left-radius: 3px;
    border-bottom-right-radius: 3px;
    overflow-x: 20px;
    overflow-y: hidden;
}

.row {
    margin-left:0;
    margin-right:0;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
}

</style>
</head>
<body style="background-color:lightgrey">

<div class="modal-body row" style="padding:0rem !important">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="overflow:hidden">
  <div id="myDIV">
    <ul class="navbar-nav">
      <li class="nav-item">
              <a class="nav-link" href="bootstrap_navbar.html">Introduction</a>
            </li>
            <li class="nav-item">
              <a  class="nav-link" href="content_1_.php">Start</a>
            </li>
      	  <li class="nav-item">
              <a class="nav-link" href="content_3_.php">Hello World</a>
            </li>
      	  <li class="nav-item">
              <a class="nav-link" href="content_5_.php">SDK Tools</a>
            </li>
      	  <li class="nav-item">
              <a class="nav-link" href="content_7_.php">Sqlite with android</a>
            </li>
      	  <li class="nav-item">
              <a class="nav-link" href="content_9_.php">Firebase with Android</a>
            </li>
      	  <li class="nav-item">
              <a class="nav-link active" href="snakePics.php">Simple Snake Game</a>
            </li>

            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
    </ul>
    </div>
  </div>
</nav>
</div>

<br><br><br>
<div id="content2">
<h1 style="color:red;margin-left:2px">Snake Game </h2>
</div>
<br>
<div class="modal-body row" style="padding:0rem !important">
<div class="col-md-6 " id="content" >
<p>Following are the classes and codes of the Snake Game</p>
<br>
<h3 style="color:green">About Game</h3>

  <textarea style="height: 400px !important;width:90% !important;" readonly="">
  package com.example.benura.snakegame2;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.ImageButton;

public class DisplayAbout extends AppCompatActivity {

    public ImageButton imageButton;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_display_about);
        imageButton=findViewById(R.id.imageButton5);
        imageButton.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                Intent i=new Intent(DisplayAbout.this,Menu.class);
                finish();
                startActivity(i);
            }
        });
    }

    @Override
    public void onBackPressed() {
        //   boolean fromNewActivity=true;
        Intent mainIntent = new Intent(DisplayAbout.this, Menu.class);
        startActivityForResult(mainIntent, 0);

    }


}

</textarea>

<br><br>
<h3 style="color:green">Display Score</h3>

  <textarea style="height: 400px !important;width:90% !important;" readonly="">
package com.example.benura.snakegame2;

import android.content.Intent;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;

public class DisplayScore extends AppCompatActivity{

    public TextView score,name;
    public Button exit;
    public static int max;
    public String names;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_display_score);
        score=findViewById(R.id.scoreView);
        name=findViewById(R.id.name);
        exit=findViewById(R.id.back);
        String selectQuery = "SELECT * FROM scores;";
        SQLiteDatabase db = openOrCreateDatabase( "Highscore.db", SQLiteDatabase.OPEN_READWRITE , null);
        Cursor cursor = db.rawQuery(selectQuery, null);
        //if TABLE has rows
        if (cursor.moveToFirst()) {
            //Loop through the table rows
            max=cursor.getInt(1);
            do {
                if(cursor.getInt(1)>=max) {
                    max = cursor.getInt(1);
                    names=cursor.getString(0);
                }
               // score.setText(cursor.getString(1));
               // Toast.makeText(DisplayScore.this,cursor.getString(1),Toast.LENGTH_SHORT).show();

            } while (cursor.moveToNext());

            name.setText(names);
            score.setText(String.valueOf(max));

        }
        db.close();


        exit.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent i=new Intent(DisplayScore.this,Menu.class);
                finish();
                startActivity(i);
            }
        });


    }

    @Override
    public void onBackPressed() {
        //   boolean fromNewActivity=true;
        Intent mainIntent = new Intent(DisplayScore.this, Menu.class);
        startActivityForResult(mainIntent, 0);

    }

    }

</textarea>

<br><br>
<h3 style="color:green">End Game</h3>

  <textarea style="height: 400px !important;width:90% !important;" readonly="">
  package com.example.benura.snakegame2;

import android.annotation.SuppressLint;
import android.content.ContentValues;
import android.content.Intent;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.graphics.Point;
import android.os.CountDownTimer;
import android.os.Handler;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ProgressBar;
import android.widget.TextView;
import android.widget.Toast;

public class EndGame extends AppCompatActivity {
    public EditText name;
    public TextView scores,names,scoreText,gameover;
    public Button button1,button2,submit;
   public int sc,j=0;
   public String stringname;
   public ProgressBar progressBar;
    @SuppressLint("WrongConstant")
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_end_game);
        Handler handler=new Handler();
        Bundle bundle=getIntent().getExtras();
        progressBar=findViewById(R.id.progressBar);
        gameover=findViewById(R.id.gameOver);
        sc=bundle.getInt("score");
        scores=findViewById(R.id.score);
        scores.setText(String.valueOf(sc));
        scoreText=findViewById(R.id.scoreText);
        submit=findViewById(R.id.submit);
        names=findViewById(R.id.nameView);
        name=findViewById(R.id.nameText);
        button2=findViewById(R.id.back);
        button1=findViewById(R.id.exit);
        progressBar.setMax(100);


        new CountDownTimer(5000, 1000) {

            public void onTick(long millisUntilFinished) {
                progressBar.setVisibility(View.VISIBLE);

                EndGame.this.runOnUiThread(new Runnable() {

                    @Override
                    public void run() {
                        progressBar.setProgress(j);
                        j=j+40;
                    }
                });


            }

            public void onFinish() {

               progressBar.setVisibility(View.INVISIBLE);
               gameover.setVisibility(View.INVISIBLE);
               scores.setVisibility(View.VISIBLE);
               scoreText.setVisibility(View.VISIBLE);
               submit.setVisibility(View.VISIBLE);
               names.setVisibility(View.VISIBLE);
               name.setVisibility(View.VISIBLE);

            }

        }.start();


        button1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                finishAffinity();
            }
        });

        button2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                Intent i=new Intent(EndGame.this,Menu.class);
                Bundle bundle=new Bundle();
                bundle.putInt("score",sc);
                i.putExtras(bundle);
                startActivity(i);
            }
        });

        submit.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                stringname=name.getText().toString();
                String user_name="user_name";
                String user_score="user_score";
                SQLiteDatabase db;
                if(!stringname.isEmpty()) {
                    db = openOrCreateDatabase("Highscore.db", SQLiteDatabase.CREATE_IF_NECESSARY, null);
                    try {
                        // final String CREATE_TABLE = "CREATE TABLE  scores(user_name PRIMARY KEY,user_score);";

                        //   db.execSQL(CREATE_TABLE);

                        ContentValues movie_details = new ContentValues();
                        movie_details.put(user_name, stringname);
                        movie_details.put(user_score, sc);

                        db.insert("scores", null, movie_details);
                        //String sql ="INSERT INTO scores(user_name,user_score) "+"VALUES"+"('"+stringname+"',"+sc+");";
                        //  db.execSQL(sql);
                        Toast.makeText(EndGame.this, "Values added ", Toast.LENGTH_LONG).show();
                    } catch (Exception e) {
                        Toast.makeText(EndGame.this, "ERROR " + e.toString(), Toast.LENGTH_LONG).show();
                    }
                }
                name.setVisibility(View.INVISIBLE);
                names.setVisibility(View.INVISIBLE);
                submit.setVisibility(View.INVISIBLE);
                button1.setVisibility(View.VISIBLE);
                button2.setVisibility(View.VISIBLE);

            }
        });


    }

    @Override
    public void onBackPressed() {
        //   boolean fromNewActivity=true;
        Intent mainIntent = new Intent(EndGame.this, Menu.class);
        startActivityForResult(mainIntent, 0);

    }

}


</textarea>

<br><br>
<h3 style="color:green">Menu</h3>

<textarea style="height: 400px !important;width:90% !important;" readonly="">
package com.example.benura.snakegame2;

import android.content.Context;
import android.content.Intent;
import android.graphics.Bitmap;
import android.graphics.Point;
import android.media.MediaPlayer;
import android.os.CountDownTimer;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.Display;
import android.view.View;
import android.widget.Button;
import android.widget.ImageButton;
import android.widget.ProgressBar;
import android.widget.Toast;

import static com.example.benura.snakegame2.SnakeEngines.thread;

public class Menu extends AppCompatActivity{

    private ProgressBar progressBar;
    public Button start,quit,button3,resume;
    public ImageButton about;
    public static boolean isClick=false,isClicks=true;
    public static boolean isPlay=false,isDone=true;
    public MediaPlayer mp2;
    SnakeEngine snakeEngine;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_menu);
        Display display = getWindowManager().getDefaultDisplay();
        Point size = new Point();
        display.getSize(size);
       // soundPlayer=new SoundPlayer(Menu.this);
        mp2 = MediaPlayer.create(Menu.this, R.raw.destroyer);
        if(isDone) {
            mp2.start();
            isPlay=true;
        }

        progressBar=(ProgressBar)findViewById(R.id.progressBar2);
        start = (Button) findViewById(R.id.start);
        start.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                progressBar.setVisibility(View.VISIBLE);
                new CountDownTimer(3000, 1000) {

                    public void onTick(long millisUntilFinished) {

                    }

                    public void onFinish() {

                        Intent i = new Intent(Menu.this, SnakeEngine.class);
                        isPlay=false;
                        mp2.stop();
                        finish();
                        startActivity(i);
                    }

                }.start();
            }
        });


        quit=findViewById(R.id.quit);
        quit.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                mp2.stop();
                finishAffinity();
            }
        });

        ImageButton sound=findViewById(R.id.sound);
        sound.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                if(isClick==false) {
                    isClick=true;

                    Toast.makeText(Menu.this,"Sound off",Toast.LENGTH_SHORT).show();
                    if(isPlay) {
                        mp2.pause();
                        isPlay = false;
                        isDone=false;
                        isClicks=false;
                    }

                }

                else{

                    isClick=false;
                    Toast.makeText(Menu.this,"Sounnd on",Toast.LENGTH_SHORT).show();
                    if(!isPlay) {
                        mp2.start();
                        isClicks=true;
                        isPlay=true;
                        isDone=true;
                    }

                }

            }
        });

        button3=findViewById(R.id.score);
        button3.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                isPlay=false;
                mp2.stop();
                Intent i=new Intent(Menu.this,DisplayScore.class);
                finish();
                startActivity(i);

            }
        });

        about=findViewById(R.id.about);
        about.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                isPlay=false;
                mp2.stop();
                Intent i=new Intent(Menu.this,DisplayAbout.class);
                finish();
                startActivity(i);

            }
        });
        snakeEngine=new SnakeEngine();

        resume=findViewById(R.id.resume);

       /* if(!snakeEngine.getBack()){
            Bundle bundle=getIntent().getExtras();
            String key=bundle.getString("key");
            if(key=="true") {
                resume.setVisibility(View.VISIBLE);
                isBack=false;
            }
        }*/
        resume.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                isPlay=false;
                mp2.stop();

                Intent mainIntent = new Intent(Menu.this, SnakeEngine.class);
                mainIntent.setFlags(Intent.FLAG_ACTIVITY_REORDER_TO_FRONT);
                startActivityForResult(mainIntent, 0);


            }
        });


    }

    @Override
    public void onBackPressed() {
     //   boolean fromNewActivity=true;
        System.exit(0);
       finishAffinity();

    }


    public boolean getVariable()
    {

        return isClicks;
    }

    @Override
    protected void onResume() {
        if (SnakeEngine.isBack){
            resume.setVisibility(View.VISIBLE);
        }

        else
            resume.setVisibility(View.INVISIBLE);
        super.onResume();
    }

}
</textarea>

<br><br>
<h3 style="color:green">Snake Engine</h3>

<textarea style="height: 400px !important;width:90% !important;" readonly="">
package com.example.benura.snakegame2;

import android.annotation.SuppressLint;
import android.app.Activity;
import android.content.Context;
import android.content.Intent;
import android.graphics.Point;
import android.os.Bundle;
import android.os.CountDownTimer;
import android.view.Display;
import android.view.View;
import android.widget.Button;
import android.widget.FrameLayout;
import android.widget.LinearLayout;
import android.widget.RelativeLayout;
import android.widget.Toast;


public class SnakeEngine extends Activity {
    public  static boolean isBack=false;
    public boolean isPause=false;
    public  Button button1;
    public  Display display;
    public Point size;
    SnakeEngines snakeEngine;
    FrameLayout game;
    RelativeLayout GameButtons;//Holder for the buttons
    @SuppressLint("ResourceType")
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_snake_engine);
        display = getWindowManager().getDefaultDisplay();
        size = new Point();
        display.getSize(size);
       snakeEngine=new SnakeEngines(SnakeEngine.this,size);
       game=new FrameLayout(this);
       GameButtons=new RelativeLayout(this);
       final Button button=new Button(this);
       button1=new Button(this);
       button1.setText("PAUSE");
       button1.setId(1235);
       button.setText("QUIT");
       button.setId(1234);
        RelativeLayout.LayoutParams params1=new RelativeLayout.LayoutParams(RelativeLayout.LayoutParams.WRAP_CONTENT,RelativeLayout.LayoutParams.WRAP_CONTENT);
       RelativeLayout.LayoutParams params=new RelativeLayout.LayoutParams(RelativeLayout.LayoutParams.WRAP_CONTENT,RelativeLayout.LayoutParams.WRAP_CONTENT);
       GameButtons.setLayoutParams(params);
       GameButtons.setLayoutParams(params1);
       params1.setMargins(size.x-600,size.y-200,20,5);
       params.setMargins(size.x-280,size.y-200,5,5);
       GameButtons.addView(button1);
       GameButtons.addView(button);
      // params.addRule(RelativeLayout.ALIGN_PARENT_RIGHT,RelativeLayout.TRUE);
      // params.addRule(RelativeLayout.ALIGN_PARENT_BOTTOM,RelativeLayout.TRUE);
        button1.setLayoutParams(params1);
       button.setLayoutParams(params);
       game.addView(snakeEngine);
       game.addView(GameButtons);
       setContentView(game);


        button1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                if(isPause==false){
                    onPause();
                    button1.setText("Resume");
                    isPause=true;
                }

                else{
                    onResume();
                    button1.setText("Pause");
                    isPause=false;

                }
            }
        });


        button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent i = new Intent(SnakeEngine.this, Menu.class);
                isBack=false;
                finish();
                startActivity(i);
            }
        });

        }

    // Start the thread in snakeEngine
    @Override
    protected void onResume() {
        super.onResume();
        snakeEngine.resume();
    }

    // Stop the thread in snakeEngine
    @Override
    protected void onPause() {
        super.onPause();
        snakeEngine.pause();
    }

    @Override
    public void onBackPressed() {
        //   boolean fromNewActivity=true;
        button1.setText("RESUME");
       // onPause();
        isBack=true;
        Intent mainIntent = new Intent(SnakeEngine.this, Menu.class);
       // mainIntent.setFlags(Intent.FLAG_ACTIVITY_REORDER_TO_FRONT);

        startActivityForResult(mainIntent, 0);
        new CountDownTimer(3000,1000){

            public void onTick(long millisUntilFinished) {

            }

            public void onFinish() {

                button1.setText("PAUSE");
            }

        }.start();

    }

    @Override
    public void onRestoreInstanceState(Bundle bundle){

        super.onRestoreInstanceState(bundle);
        String state=bundle.getString("saved");
        if(state==null){

        }

        else
            Toast.makeText(SnakeEngine.this,"Done",Toast.LENGTH_SHORT).show();

    }

    @Override
    public void onSaveInstanceState(Bundle save) {

        super.onSaveInstanceState(save);

    }



}

</textarea>

<br><br>
  <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Snake Game Images
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background-color:lawngreen">
    <a class="dropdown-item" href="image1.php">App</a>
    <a class="dropdown-item" href="image2.php">Menu</a>
    <a class="dropdown-item" href="image3.php">Game Surface 1</a>
    <a class="dropdown-item" href="image4.php">Game Surface 2</a>
    <a class="dropdown-item" href="image5.php">Game Over</a>
    <a class="dropdown-item" href="image6.php">Your Score</a>
    <a class="dropdown-item" href="image8.php">High Score</a>
    <a class="dropdown-item" href="image8.php">About</a>
  </div>
</div>

<br><br>
<div class="col-md-6 " id="content1" >
<h3 style="color:green">Snake Engines</h3>

<textarea style="height: 600px !important;width:90% !important;" readonly="">
package com.example.benura.snakegame2;

import android.app.Activity;
import android.content.Context;
import android.content.Intent;
import android.graphics.Bitmap;
import android.graphics.BitmapFactory;
import android.graphics.Canvas;
import android.graphics.Color;
import android.graphics.Paint;
import android.graphics.Point;
import android.inputmethodservice.Keyboard;
import android.os.Bundle;
import android.os.CountDownTimer;
import android.renderscript.ScriptGroup;
import android.view.MotionEvent;
import android.view.SurfaceHolder;
import android.view.SurfaceView;
import android.widget.Toast;

import java.util.Random;


public class SnakeEngines extends SurfaceView implements Runnable {

    public int snakey,snakex;
    public static boolean news=false;
    public Context context;
    public Activity activity;
    private  Bitmap bmp;
    public SoundPlayer soundPlayer;
    public static Thread thread = null;

    public enum Heading {UP, RIGHT, DOWN, LEFT}

    private Heading heading = Heading.RIGHT;
    private int screenX;
    private int screenY;

    private int snakeLength;

    private int bobX;
    private int bobY;

    private int blockSize;

    private final int NUM_BLOCKS_WIDE = 40;
    private int numBlocksHigh;

    private long nextFrameTime;

    private final long FPS = 10;

    private final long MILLIS_PER_SECOND = 1000;

    private static int score,score2;

    private int[] snakeXs;
    private int[] snakeYs;

    public volatile boolean isPlaying;

    private Canvas canvas;
    private SurfaceHolder surfaceHolder;
    private int flag=0;

    private Paint paint;

    @Override
    public void run() {

      while (isPlaying) {

               if(updateRequired())
                update();
                draw();

                if(score==1000)
                    EndGame();

        }

        }

    public void pause() {
        isPlaying = false;
        try {
            thread.join();
        } catch (InterruptedException e) {
            // Error
        }
    }

    public void resume() {
        isPlaying = true;
        thread = new Thread(this);
        thread.start();
    }

    public void newGame() {
        // Start with a single snake segment
        snakeLength = 1;
        snakeXs[0] = 0;
        snakeYs[0] = numBlocksHigh / 2;

        spawnBob();

        score = 0;


        nextFrameTime = System.currentTimeMillis();
    }


    public SnakeEngines(Context context, Point size) {
        super(context);
        activity= (Activity) context;
        context = context;
        screenX = size.x;
        screenY = size.y;
        this.bmp = BitmapFactory.decodeResource(getResources(), R.drawable.ic_android);
        surfaceHolder = getHolder();
        surfaceHolder.addCallback(new SurfaceHolder.Callback() {

            @Override
            public void surfaceDestroyed(SurfaceHolder holder) { }

            @Override
            public void surfaceCreated(SurfaceHolder holder) {
                Canvas canvas = holder.lockCanvas();
                if (canvas != null) {
                    draw(canvas);
                    holder.unlockCanvasAndPost(canvas);
                }
            }

            @Override
            public void surfaceChanged(SurfaceHolder holder, int format, int width, int height) { }

        });

        blockSize = screenX / NUM_BLOCKS_WIDE;

        numBlocksHigh = screenY / blockSize;

        soundPlayer=new SoundPlayer(context);

        paint = new Paint();

        // If you score 200 you are rewarded with a crash achievement!
        snakeXs = new int[200];
        snakeYs = new int[200];

      newGame();
    }


    public void spawnBob() {

            Random random = new Random();
            bobX = random.nextInt(NUM_BLOCKS_WIDE - 1) + 1;
            bobY = random.nextInt(numBlocksHigh - 1) + 1;

    }

    private void eatBob(){

        soundPlayer.attack();
        if(score%70==0&&score!=0)
        snakeLength=snakeLength+2;

        else
            snakeLength++;

        spawnBob();

        if(flag==0)
        score = score + 10;

        else
            score=score+30;

    }

    private void moveSnake(){
        // Move the body

        for (int i = snakeLength; i > 0; i--) {
            snakeXs[i] = snakeXs[i - 1];
            snakeYs[i] = snakeYs[i - 1];

        }

        switch (heading) {
            case UP:
                snakeYs[0]--;
                snakey=snakeYs[0];
                break;

            case RIGHT:
                snakeXs[0]++;
                snakex=snakeXs[0];
                break;

            case DOWN:
                snakeYs[0]++;
                snakey=snakeYs[0];
                break;

            case LEFT:
                snakeXs[0]--;
                snakex=snakeXs[0];
                break;
        }
    }

    public void update() {
        // Did the head of the snake eat Bob?
        if (snakeXs[0] == bobX && snakeYs[0] == bobY) {
            eatBob();
        }


        moveSnake();

        if (detectDeath()) {
            soundPlayer.playhit();
            EndGame();
            //newGame();
        }

       else if(news) {
            newGame1();
           // EndGame();
            news = false;
        }

    }

    private boolean detectDeath(){
        // Has the snake died?
        boolean dead = false;

        if (snakeXs[0] == -1) news = true;
        if (snakeXs[0] >= NUM_BLOCKS_WIDE) news = true;
        if (snakeYs[0] == -1) news = true;
        if (snakeYs[0] == numBlocksHigh) news = true;

        for (int i = snakeLength - 1; i > 0; i--) {
            if ((i > 4) && (snakeXs[0] == snakeXs[i]) && (snakeYs[0] == snakeYs[i])) {
                dead = true;
            }
        }

        return dead;
    }

   public void draw() {

       if (surfaceHolder.getSurface().isValid()) {
           canvas = surfaceHolder.lockCanvas();

           canvas.drawColor(Color.argb(255, 26, 182, 144));

           paint.setColor(Color.argb(255, 255, 255, 255));



           paint.setTextSize(90);
           canvas.drawText("Score:" + score, 20, 70, paint);


           for (int i = 0; i < snakeLength; i++) {
               canvas.drawRect(snakeXs[i] * blockSize,
                       (snakeYs[i] * blockSize),
                       (snakeXs[i] * blockSize) + blockSize,
                       (snakeYs[i] * blockSize) + blockSize,
                       paint);
           }

           // Set the color of the paint to draw Bob red
           paint.setColor(Color.argb(255, 255, 25, 25));

           if(score==0||score%70!=0) {
               canvas.drawCircle(bobX * blockSize, bobY * blockSize, blockSize / 2, paint);
               flag=0;
           }

           else if(score%70==0&&score!=0) {

               canvas.drawCircle(bobX * blockSize, bobY * blockSize, blockSize, paint);

               flag=1;
           }

        /*   canvas.drawRect(bobX * blockSize,
                   (bobY * blockSize),
                   (bobX * blockSize) + blockSize,
                   (bobY * blockSize) + blockSize,
                   paint);   */

           // Unlock the canvas and reveal the graphics for this frame
           surfaceHolder.unlockCanvasAndPost(canvas);
       }
   }


    public boolean updateRequired() {


        if(nextFrameTime <= System.currentTimeMillis()){

            nextFrameTime =System.currentTimeMillis() + MILLIS_PER_SECOND / FPS;

            return true;
        }

        return false;
    }

    @Override
    public boolean onTouchEvent(MotionEvent motionEvent) {

        switch (motionEvent.getAction() & MotionEvent.ACTION_MASK) {
            case MotionEvent.ACTION_UP:
                if (motionEvent.getX() >= screenX / 2) {
                    switch(heading){
                        case UP:
                            heading = Heading.RIGHT;
                            break;
                        case RIGHT:
                            heading = Heading.DOWN;
                            break;
                        case DOWN:
                            heading = Heading.LEFT;
                            break;
                        case LEFT:
                            heading = Heading.UP;
                            break;
                    }
                } else {
                    switch(heading){
                        case UP:
                            heading = Heading.LEFT;
                            break;
                        case LEFT:
                            heading = Heading.DOWN;
                            break;
                        case DOWN:
                            heading = Heading.RIGHT;
                            break;
                        case RIGHT:
                            heading = Heading.UP;
                            break;
                    }
                }
        }
        return true;
    }

    public void EndGame(){

       Intent i = new Intent(activity, EndGame.class);
       Bundle bundle=new Bundle();
       bundle.putInt("score",score);
       i.putExtras(bundle);
        activity.finish();
        activity.startActivity(i);

    }

    public void newGame1() {
        // Start with a single snake segment
        if(snakeXs[0]>=NUM_BLOCKS_WIDE) {
            snakeXs[0] = 0;
            snakeYs[0] =snakey;
        }

        else if(snakeXs[0]==-1){

            snakeXs[0] = NUM_BLOCKS_WIDE;
            snakeYs[0] = snakey;

        }

        else if(snakeYs[0]>=numBlocksHigh){

            snakeXs[0] = snakex;
            snakeYs[0] =0;
        }

        else if(snakeYs[0]==-1){

            snakeXs[0] = snakex;
            snakeYs[0] =numBlocksHigh;

        }
        nextFrameTime = System.currentTimeMillis();
    }


}

</textarea>

<br><br>
<h3 style="color:green">Snake Engines</h3>

<textarea style="height: 600px !important;width:90% !important;" readonly="">
package com.example.benura.snakegame2;

import android.app.Activity;
import android.content.Context;
import android.media.AudioManager;
import android.media.SoundPool;
import android.os.Bundle;
import android.widget.Toast;

import static android.widget.Toast.*;

public class SoundPlayer extends Menu{

    private static SoundPool soundPool;
    private static int hit,attack,destroy;
    public Context con;
    public Menu menu;

    public SoundPlayer(Context context){
        con=context;
        soundPool=new SoundPool(2, AudioManager.STREAM_MUSIC,0);
        hit=soundPool.load(context,R.raw.snakehit2,1);
        attack=soundPool.load(context,R.raw.snakeatt,2);
        destroy=soundPool.load(context,R.raw.destroyer,2);
        menu=new Menu();

    }

    public void playhit(){
        boolean isOk=menu.getVariable();
        if(isOk)

        soundPool.play(hit,1.0f,1.0f,1,0,1.0f);
    }

    public void attack(){
        boolean isOk=menu.getVariable();
        if(isOk)
        soundPool.play(attack,1.0f,1.0f,1,0,1.0f);
    }

}

</textarea>

</div>
</div>


  <div class="jumbotron jumbotron-fluid" style="background-color:black;text-color:grey;width:100%;margin-bottom:0">
  <div class="container">
    <p>Visit <a href="https://github.com/BLasan/SnakeGame">https://github.com/BLasan/SnakeGame</a></p>
    
  </div>
</div>

<script>
var navShow = (id) => {
	var content_file = 'content_' + id + '_.php';
	$.post( content_file, function( data ) {
		console.log(data);
	  $( "#content" ).html(data);
	});
    id=id+1;
    var content_file1 = 'content_' + id + '_.php';
	  $.post( content_file1, function( data ) {
		console.log(data);
	  $( "#content1" ).html(data);
   });
   var content_file2 = 'content_' + 11 + '_.php';
	  $.post( content_file2, function( data ) {
		console.log(data);
	  $( "#content2" ).html(data);
   });
   
  

  // $("#content").load("content_file");
}

</script>
<script>
// Add active class to the current button (highlight it)
var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("nav-link");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}
</script>





<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>