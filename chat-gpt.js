const { OpenAI } = require("openai");
const openai = new OpenAI("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");

async function askQuestion(question) {
  const completions = await openai.complete({
    engine: "text-davinci-002",
    prompt: `Q: ${question}\nA:`,
    maxTokens: 1024,
    n: 1,
    stop: "\n",
  });
  const message = completions.choices[0].text.trim();
  return message;
}

const response = await askQuestion("What is the meaning of life?");
console.log(response); // Output: "The meaning of life is subjective and varies for each person."
