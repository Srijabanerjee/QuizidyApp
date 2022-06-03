
const quizDB = [
  {
    question: "Q1: Str='Rolling stone' what will be the output of Str[0:4]?",
    a: "Roll",
    b: "Rolli",
    c: "oll",
    d: "None",
    ans: "ans1"
  },
  {
    question: "Q2: Str='Rolling stone' what will be the output of Str[9:-1]?",
    a: "stone",
    b: "tone",
    c: "ton",
    d: " ",
    ans: "ans3"
  },
  {
    question: "Q3: S='Hello world!' Which of the following will return 'Hello world'?",
    a: "S[::-1]",
    b: "S[1:]",
    c: "S[0:]",
    d: "S[:-1]",
    ans: "ans4"
  },
  {
    question: "Q4: str1 = 'Welcome' print(str1[:6] + ' PYnative')",
    a: "Welcome PYnative",
    b: "Welcom PYnative",
    c: "WelcomPYnative",
    d: "WelcomePYnative",
    ans: "ans2"
  },
  {
    question: "Q5: str = 'My salary is 7000';print(str.isalnum())",
    a: "True",
    b: "False",
    c: "Can't say",
    d: "None",
    ans: "ans2"
  }
];

const question = document.querySelector('.question');
const option1 = document.querySelector('#option1');
const option2 = document.querySelector('#option2');
const option3 = document.querySelector('#option3');
const option4 = document.querySelector('#option4');
const submit = document.querySelector('#submit');

const loadQuestion = () => {
  question.innerText = quizDB[0].question;
}

loadQuestion();
