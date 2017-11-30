package com.hackathon.arman.hackathon_nsu;

import android.content.Intent;
import android.support.annotation.NonNull;
import android.support.design.widget.BottomNavigationView;
import android.support.v4.view.ViewPager;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.MenuItem;
import android.view.View;

import com.hackathon.arman.hackathon_nsu.Adapter.NavigationViewAdapter;
import com.hackathon.arman.hackathon_nsu.Fragment.HouseFeed;
import com.hackathon.arman.hackathon_nsu.Fragment.HouseOnMap;

public class MainActivity extends AppCompatActivity {
    private BottomNavigationView bottomNavigationView;
    private ViewPager viewPager;
    private MenuItem menuItem;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        initComponent();
    }

    /**
     * Initialize Button Actions
     */
    private void initActionListener() {

        bottomNavigationView.setOnNavigationItemSelectedListener(
                new BottomNavigationView.OnNavigationItemSelectedListener() {
                    @Override
                    public boolean onNavigationItemSelected(@NonNull MenuItem item) {
                        switch (item.getItemId()) {
                            case R.id.home_menu:
                                viewPager.setCurrentItem(0);
                                break;
                            case R.id.map_menu:
                                viewPager.setCurrentItem(1);
                                break;

                        }
                        return false;
                    }
                });

/**
 * init view Pager in main window
 */
        viewPager.setOnPageChangeListener(new ViewPager.OnPageChangeListener() {
            @Override
            public void onPageScrolled(int position, float positionOffset, int positionOffsetPixels) {
            }

            @Override
            public void onPageSelected(int position) {

                if (menuItem != null) {
                    menuItem.setChecked(false);
                } else {
                    bottomNavigationView.getMenu().getItem(0).setChecked(false);
                }
                bottomNavigationView.getMenu().getItem(position).setChecked(true);
                menuItem = bottomNavigationView.getMenu().getItem(position);
            }

            @Override
            public void onPageScrollStateChanged(int state) {

            }
        });

        setUpPager(viewPager);
    }

    /**
     * set up view pager
     *
     * @param viewPager
     */

    private void setUpPager(ViewPager viewPager) {

        NavigationViewAdapter adapter = new NavigationViewAdapter(getSupportFragmentManager());

        adapter.addFragment(new HouseFeed());
        adapter.addFragment(new HouseOnMap());

        viewPager.setAdapter(adapter);
    }


    /**
     * initialize components
     */
    public void initComponent() {
        bottomNavigationView = (BottomNavigationView) findViewById(R.id.bottom_nav);
        viewPager = (ViewPager) findViewById(R.id.viewPager);
        initActionListener();


        findViewById(R.id.mapbutton).setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                startActivity(new Intent(MainActivity.this, MapActivity.class));
            }
        });

    }

}
