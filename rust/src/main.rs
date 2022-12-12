use std::{fs, vec};

fn main() {
    println!("Day x");
    let file_path = "resources/input.txt";
    let content = fs::read_to_string(file_path).expect("Cannot read file");
    let lines = content.split("\n").collect();

    // implement solution
}

#[cfg(test)]
mod tests {
    use super::*;

    #[test]
    fn rename_me() {
        // arrange

        // act

        // assert
    }
}
