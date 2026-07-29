def greet(name: str) -> str:
    return f"Hello from Python, {name}!"


def main() -> None:
    name = input("Enter your name: ")
    print(greet(name))


if __name__ == "__main__":
    main()
