using System;
using System.Collections;
using System.Collections.Generic;
using System.IO;
using TMPro;
using UnityEngine;
using UnityEngine.UI;
using UnityEngine.SceneManagement;

public class HandlerScript : MonoBehaviour {
    public TextMeshProUGUI panelText,button1Text,button2Text,button3Text,button4Text;
    public static int currentScript;
    static List<string> text;
    public Button button1, button2, button3, button4;

    private Vector2 originB1, originB2, originB3, originB4;

    [System.NonSerialized] public static bool resetSizes;

    public static int score, buttonNum, sBad, sNeutral, sGood, sBest;

    static List<int> usedScripts;

    private SceneHandler sceneh = new SceneHandler();
    
    void Start () {
        text = new List<string>();
        usedScripts = new List<int>();

        score = 0;

        sBad = 5;
        sNeutral = 10;
        sGood = 15;
        sBest = 20;

        resetSizes = false;
        
        originB1 = button1.GetComponent<RectTransform>().anchoredPosition;
        originB2 = button2.GetComponent<RectTransform>().anchoredPosition;
        originB3 = button3.GetComponent<RectTransform>().anchoredPosition;
        originB4 = button4.GetComponent<RectTransform>().anchoredPosition;

        PickScript();
    }
	void FixedUpdate () {

        panelText.text = text[0].ToString();
        button1Text.text = text[1].ToString();
        button2Text.text = text[2].ToString();
        button3Text.text = text[3].ToString();
        button4Text.text = text[4].ToString();

        if (resetSizes)
        {
            //Debug.Log("RESETTING SIZES");

            button1.GetComponent<RectTransform>().anchoredPosition = originB1;
            button2.GetComponent<RectTransform>().anchoredPosition = originB2;
            button3.GetComponent<RectTransform>().anchoredPosition = originB3;
            button4.GetComponent<RectTransform>().anchoredPosition = originB4;

            button2.GetComponent<RectTransform>().SetSizeWithCurrentAnchors(RectTransform.Axis.Vertical, 91);
            button2.GetComponent<RectTransform>().SetSizeWithCurrentAnchors(RectTransform.Axis.Horizontal, 284);

            button3.GetComponent<RectTransform>().SetSizeWithCurrentAnchors(RectTransform.Axis.Vertical, 91);
            button3.GetComponent<RectTransform>().SetSizeWithCurrentAnchors(RectTransform.Axis.Horizontal, 284);

            resetSizes = false;
        }
    }

    public void Score(Button button)
    {
        if (button.name == "Button_1")
        {
            buttonNum = 1;
        } else if (button.name == "Button_2")
        {
            buttonNum = 2;
        } else if (button.name == "Button_3")
        {
            buttonNum = 3;
        } else if (button.name == "Button_4")
        {
            buttonNum = 4;
        }


        if (currentScript == 1)
        {
            switch (buttonNum)
            {
                case 1: score += sGood;
                    break;
                case 2:
                    score += sBest;
                    break;
                case 3:
                    score += sBad;
                    break;
                case 4:
                    score += sNeutral;
                    break;
                default: 
                    //Debug.Log("NO SCORE COULD BE ADDED");
                    break;
            }
        }
        if (currentScript == 2)
        {
            switch (buttonNum)
            {
                case 1:
                    score += sBest;
                    break;
                case 2:
                    score += sBad;
                    break;
                case 3:
                    score += sNeutral;
                    break;
                case 4:
                    score += sGood;
                    break;
                default:
                    //Debug.Log("NO SCORE COULD BE ADDED");
                    break;
            }
        }
        if (currentScript == 3)
        {
            switch (buttonNum)
            {
                case 1:
                    score += sBest;
                    break;
                case 2:
                    score += sNeutral;
                    break;
                case 3:
                    score += sGood;
                    break;
                case 4:
                    score += sBad;
                    break;
                default:
                    //Debug.Log("NO SCORE COULD BE ADDED");
                    break;
            }
        }
        if (currentScript == 4)
        {
            switch (buttonNum)
            {
                case 1:
                    score += sGood;
                    break;
                case 2:
                    score += sBad;
                    break;
                case 3:
                    score += sBest;
                    break;
                case 4:
                    score += sNeutral;
                    break;
                default:
                    //Debug.Log("NO SCORE COULD BE ADDED");
                    break;
            }
        }
        if (currentScript == 5)
        {
            switch (buttonNum)
            {
                case 1:
                    score += sBest;
                    break;
                case 2:
                    score += sNeutral;
                    break;
                case 3:
                    score += sGood;
                    break;
                case 4:
                    score += sBad;
                    break;
                default:
                    //Debug.Log("NO SCORE COULD BE ADDED");
                    break;
            }
        }
        if (currentScript == 6)
        {
            switch (buttonNum)
            {
                case 1:
                    score += sGood;
                    break;
                case 2:
                    score += sBest;
                    break;
                case 3:
                    score += sNeutral;
                    break;
                case 4:
                    score += sBad;
                    break;
                default:
                    //Debug.Log("NO SCORE COULD BE ADDED");
                    break;
            }
        }
        if (currentScript == 7)
        {
            switch (buttonNum)
            {
                case 1:
                    score += sNeutral;
                    break;
                case 2:
                    score += sGood;
                    break;
                case 3:
                    score += sBest;
                    break;
                case 4:
                    score += sBad;
                    break;
                default:
                    //Debug.Log("NO SCORE COULD BE ADDED");
                    break;
            }
        }
        if (currentScript == 8)
        {
            switch (buttonNum)
            {
                case 1:
                    score += sBad;
                    break;
                case 2:
                    score += sBest;
                    break;
                case 3:
                    score += sNeutral;
                    break;
                case 4:
                    score += sGood;
                    break;
                default:
                    //Debug.Log("NO SCORE COULD BE ADDED");
                    break;
            }
        }
        if (currentScript == 9)
        {
            switch (buttonNum)
            {
                case 1:
                    score += sNeutral;
                    break;
                case 2:
                    score += sBest;
                    break;
                case 3:
                    score += sGood;
                    break;
                case 4:
                    score += sBad;
                    break;
                default:
                    //Debug.Log("NO SCORE COULD BE ADDED");
                    break;
            }
        }
        if (currentScript == 10)
        {
            switch (buttonNum)
            {
                case 1:
                    score += sNeutral;
                    break;
                case 2:
                    score += sBad;
                    break;
                case 3:
                    score += sBest;
                    break;
                case 4:
                    score += sGood;
                    break;
                default:
                   // Debug.Log("NO SCORE COULD BE ADDED");
                    break;
            }
        }

        //Debug.Log("SCORE: " + score);
    }

    public void JumpingButton(Button button)
    {
        Vector3 beginPos = button.GetComponent<RectTransform>().anchoredPosition;
        int richting = UnityEngine.Random.Range(1, 4);

        if (richting < 2)
        {
            button.GetComponent<RectTransform>().anchoredPosition = beginPos + new Vector3(100, 0, 0);
        }
        else if (richting < 3)
        {
            button.GetComponent<RectTransform>().anchoredPosition = beginPos + new Vector3(0, 50, 0);
        }
        else if (richting < 4)
        {
            button.GetComponent<RectTransform>().anchoredPosition = beginPos + new Vector3(0, -50, 0);
        }
        else if (richting < 5)
        {
            button.GetComponent<RectTransform>().anchoredPosition = beginPos + new Vector3(-50, 0, 0);
        }

    }

    public void MoveButton(Button button)
    {
        Vector3 verschuilBoven = new Vector3(-220, -445, 0);

        button.GetComponent<RectTransform>().anchoredPosition = verschuilBoven;
        button.GetComponent<RectTransform>().SetSizeWithCurrentAnchors(RectTransform.Axis.Vertical, 44);
        button.GetComponent<RectTransform>().SetSizeWithCurrentAnchors(RectTransform.Axis.Horizontal, 350);
    }

    public void PickScript()
    {
        //kiest wa et volgende script wordt en zorgt da ge ni etzelfde terug krijgt

        text = new List<string>();

        //normaal zou dees u naar het eindscherm brengen, maar voorlopig reset
        if (usedScripts.Count == 10)
        {
            //usedScripts = new List<int>();

            //Debug.Log("LOADING SCENE");

            PlayerPrefs.SetInt("MyScore", score);
            //Debug.Log(PlayerPrefs.GetInt("MyScore"));

            sceneh.ChangeScene(1);
            //if vor welke rank score
            //laad toepasselijke end screen
            //score meegeve as een parameter hier?
        }
        else
        {
            do
            {
                currentScript = UnityEngine.Random.Range(1, 11);
            }
            while (usedScripts.Contains(currentScript));
            Debug.Log("current script: " + currentScript);

            ReadFile();

            usedScripts.Add(currentScript);
        }
    }

    private void ReadFile()
    {
        try
        {
            TextAsset tempText = (TextAsset)Resources.Load("Scenarios/" + currentScript);

            string textFromAsset = tempText.text;
            string[] textArray = textFromAsset.Split('\n');
            foreach (string item in textArray)
            {
                text.Add(item);
            }

        }
        catch (System.Exception e)
        {
            Debug.Log(e);
        }
    }
}
