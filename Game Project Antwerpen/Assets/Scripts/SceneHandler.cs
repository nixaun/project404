using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.SceneManagement;

public class SceneHandler : MonoBehaviour {

    public AudioSource click;

    public void ChangeScene(int num)
    {
        if (num == 0)
        {
            //click.Play();
            SceneManager.LoadScene("Scenario A");
        }
        if (num == 1)
        {
            SceneManager.LoadScene("End1");
        }
        if (num == 2)
        {
            click.Play();
            SceneManager.LoadScene("StartScreen");
        }


    }

    public void CorrectEndScreen(int score)
    {
        if (score <= 70)
        {
            SceneManager.LoadScene("End1");
        }
        else if (score <= 100)
        {

        }
        else if (score <= 150)
        {

        }
        else
        {

        }
    }
}
