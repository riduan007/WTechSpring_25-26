function analyzeText() {

    let text = document.getElementById("inputText").value;

    // Trim to remove extra spaces from start and end
    let cleanText = text.trim();

    // Handle empty input
    if (cleanText === "") {
        document.getElementById("resultBox").innerHTML =
            "<p>Please enter some text first.</p>";
        return;
    }

    // Character count
    let charCount = cleanText.length;

    // Word count (remove extra spaces)
    let words = cleanText.split(/\s+/);
    let wordCount = words.length;

    // Reverse text
    let reversedText = cleanText.split("").reverse().join("");

    // Show result
    document.getElementById("resultBox").innerHTML =
        "<p><b>Total Characters:</b> " + charCount + "</p>" +
        "<p><b>Total Words:</b> " + wordCount + "</p>" +
        "<p><b>Reversed Text:</b> " + reversedText + "</p>";
}